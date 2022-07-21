/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package modelo;

/**
 *
 * @author vboni
 */
public class Malo {
    
    private int codigo;
    private String personaje;
    private String disposicion;
    private String oficio;
    private String especie;
    private String arma;
    private String rareza;

    public Malo(int codigo, String personaje, String disposicion, String oficio, String especie, String arma, String rareza) {
        this.codigo = codigo;
        this.personaje = personaje;
        this.disposicion = disposicion;
        this.oficio = oficio;
        this.especie = especie;
        this.arma = arma;
        this.rareza = rareza;
    }

    public int getCodigo() {
        return codigo;
    }

    public void setCodigo(int codigo) {
        this.codigo = codigo;
    }

    public String getPersonaje() {
        return personaje;
    }

    public void setPersonaje(String personaje) {
        this.personaje = personaje;
    }

    public String getDisposicion() {
        return disposicion;
    }

    public void setDisposicion(String disposicion) {
        this.disposicion = disposicion;
    }

    public String getOficio() {
        return oficio;
    }

    public void setOficio(String oficio) {
        this.oficio = oficio;
    }

    public String getEspecie() {
        return especie;
    }

    public void setEspecie(String especie) {
        this.especie = especie;
    }

    public String getArma() {
        return arma;
    }

    public void setArma(String arma) {
        this.arma = arma;
    }

    public String getRareza() {
        return rareza;
    }

    public void setRareza(String rareza) {
        this.rareza = rareza;
    }

    public Malo() {
    }
    
   
}
