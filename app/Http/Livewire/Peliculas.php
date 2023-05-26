<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pelicula;
class Peliculas extends Component
{
    //definiendo variables
    public $nombre, $reseña, $director, $genero, $fecha_de_estreno;
    public $modal = false;
    public $movies;
    public function render()
    {
        $this->movies = Pelicula::all();
        return view('livewire.peliculas');
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal() {
        $this->modal = true;
    }
    public function cerrarModal() {
        $this->modal = false;
    }

    public function limpiarCampos()
    {
        $this->nombre='';
        $this->reseña='';
        $this->director='';
        $this->genero='';
        $this->fecha_de_estreno='';
    }
}
