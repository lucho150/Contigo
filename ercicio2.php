<?php


class Clases
{
    private $id;
    private $diaSemana;
    private $horaComienzo;
    private $horaFin;
    public function get_diasemana()
    {
        return $this->diaSemana;
    }
    public function get_horacomienzo()
    {
        return $this->horaComienzo;
    }
    public function get_horafin()
    {
        return $this->horaFin;
    }
    public function get_id()
    {
        return $this->id;
    }
    public function set_diaSemana($diaSemana)
    {

        $this->diaSemana = $diaSemana;
    }
    public function set_horacomienzo($horaComienzo)
    {

        $this->diaSemana = $horaComienzo;
    }
    public function set_horafin($horaFin)
    {

        $this->horaFin = $horaFin;
    }
    public function maestros()
    {
        return new Maestros();
    }
    public function curso()
    {

        return new Curso();
    }
}
class Maestros
{

    private $maestroid;
    private $nombre;
    private $oficina;
    private $telefono;
    private $email;

    public function get_maestroid()
    {

        return $this->maestroid;
    }
    public function get_nombre()
    {

        return $this->nombre;
    }
    public function get_oficina()
    {
        return $this->oficina;
    }
    public function get_telefono()
    {
        return $this->telefono;
    }
    public function get_email($email)
    {
        return $this->email;
    }
    public function set_maestroid($maestroid)
    {
        $this->maestroid;
    }
    public function set_nombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function set_oficina($oficina)
    {
        $this->diaSemana = $oficina;
    }
    public function set_telefono($telefono)
    {
        $this->telefono = $telefono;
    }
    public function set_email($email)
    {
        $this->email = $email;
    }
}
class Curso
{

    private $id;
    private $curso;
    public function salon()
    {
        return new Salon();
    }
    public function get_id()
    {
        return $this->id;
    }
    public function get_curso()
    {
        return $this->curso;
    }
    public function set_curso($curso)
    {
        $this->curso = $curso;
    }
}
class Salon
{
    private $id;
    private $numero;

    public function get_id()
    {
        return $this->id;
    }
    public function get_numero()
    {
        return $this->numero;
    }
    public function set_numero($numero)
    {
        $this->numero = $numero;
    }
}
