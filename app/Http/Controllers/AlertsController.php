<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertsController extends Controller
{
    public function index()
    {
        $receipts = Receipt::all();
        return view('receipts.index', ['receipts' => $receipts]);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'totalPrice' => 'required|numeric',
            'date' => 'required|date',
            'productID' => 'required|exists:products,id', // Asegura que el producto existe
            'quantity' => 'required|integer|min:1',
            'addressID' => 'required|exists:addresses,id', // Asegura que la dirección existe
            'recipientName' => 'required|string|max:255',
        ]);
    
        // Crear el recibo
        $receipt = new Receipt();
        $receipt->totalPrice = $request->totalPrice;
        $receipt->date = $request->date;
        $receipt->save();
    
        // Crear el ítem asociado
        $item = new Item();
        $item->productID = $request->productID;
        $item->receiptID = $receipt->id; // Usamos el ID del recibo recién creado
        $item->quantity = $request->quantity;
        $item->save();
    
        // Crear el envío asociado
        $shipment = new Shipment();
        $shipment->userID = Auth::id(); // Usuario autenticado
        $shipment->addressID = $request->addressID;
        $shipment->receiptID = $receipt->id; // Usamos el ID del recibo
        $shipment->departureDate = now()->addDays(2); // Valor por defecto
        $shipment->deliveryDate = now()->addDays(15); // Valor por defecto
        $shipment->status = 'En proceso'; // Valor por defecto
        $shipment->cost = 9.99; // Valor por defecto
        $shipment->recipientName = $request->recipientName;
        $shipment->save();
    
        // Redirigir a la ruta 'receipts.info' con el ID del recibo
        return redirect()->route('receipts.info', ['id' => $receipt->id])->with('success', 'Compra, ítem y envío creados exitosamente.');
    }


    public function showInfo($id)
    {
        $receipt = Receipt::find($id);
    
        if (!$receipt) {
            return redirect()->route('receipts.index')->with('error', 'Recibo no encontrado.');
        }
    
        $item = Item::where('receiptID', $receipt->id)->first();
    
        $shipment = Shipment::where('receiptID', $receipt->id)->first();
    
        return view('receipts.info', ['receipt' => $receipt, 'item' => $item, 'shipment' => $shipment]);
    }

    public function receiptPDF($id)
    {
        set_time_limit(300);

        $receipt=Receipt::find($id);
        $pdf = \PDF::loadView('reportsU.users.downloadReceiptPDF', compact('receipt'));
    }
}
