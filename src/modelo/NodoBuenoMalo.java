/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package modelo;

/**
 *
 * @author ashle
 */
public class NodoBuenoMalo {
    
    private Malo personaje;
    private NodoBuenoMalo siguiente;
    private NodoBuenoMalo previo;

    public NodoBuenoMalo() {
    }
    
    public NodoBuenoMalo(Malo personaje) {
        this.personaje = personaje;
    }

    public Malo getPersonaje() {
        return personaje;
    }

    public void setPersonaje(Malo personaje) {
        this.personaje = personaje;
    }

    public NodoBuenoMalo getSiguiente() {
        return siguiente;
    }

    public void setSiguiente(NodoBuenoMalo siguiente) {
        this.siguiente = siguiente;
    }

    public NodoBuenoMalo getPrevio() {
        return previo;
    }

    public void setPrevio(NodoBuenoMalo previo) {
        this.previo = previo;
    }
    
    
}
