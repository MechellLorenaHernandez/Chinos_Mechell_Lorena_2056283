<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;
use App\Artista;

class PDFController extends Controller
{
    public function index(){
        //Crear el objeto pdf
        $pdf = new Fpdf();
        //Añadir pagina
        $pdf->AddPage();
        //Establecer punto (10,10) para comenzar a pintar
        $pdf->SetXY(10,10);
        //Definir color
        $pdf->SetDrawColor(0, 99, 53);
        $pdf->SetFillColor(100, 51, 255 );
        //Establecer tipo de letra
        $pdf->SetFont('Arial', 'B', 14);
        //Establecer un contenido para mostrar
        $pdf->Cell(110, 10, "Nombre artista", 1, 0, "C", true);
        $pdf->Cell(50, 10, utf8_decode("Número Albumes"), 1, 1, "C", true);

        //Recorrer el arreglo de artistas para mostrar
        //artista y numero de discos por artista
        $artistas = Artista::all();
        $pdf->SetFont('Arial', 'I', 11);
        $pdf->SetFillColor(53, 151, 255);
        foreach ($artistas as $a) {
            $pdf->Cell(110, 10, substr(utf8_decode($a->Name), 0, 50), 1, 0, "L", true);
            $pdf->Cell(50, 10, $a->albumes()->count(), 1, 1, "C", true);
        }


        //Utilizar objeto response 
        $response = response($pdf->Output());
        //Definir el tipo mime
        $response->header("Content-Type" , 'application/pdf');
        //Retornar respuesta al navegador
        return $response;
    }
}
