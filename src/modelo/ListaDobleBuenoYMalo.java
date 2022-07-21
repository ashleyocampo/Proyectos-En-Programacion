/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package modelo;

/**
 *
 * @author ashle
 */
public class ListaDobleBuenoYMalo {

    private NodoBuenoMalo head;
    private NodoBuenoMalo tail;
    private int tamano;

    public NodoBuenoMalo getHead() {
        return head;
    }

    public void setHead(NodoBuenoMalo head) {
        this.head = head;
    }

    public NodoBuenoMalo getTail() {
        return tail;
    }

    public void setTail(NodoBuenoMalo tail) {
        this.tail = tail;
    }

    public int getTamano() {
        return tamano;
    }

    public void setTamano(int tamano) {
        this.tamano = tamano;
    }

    public void insertNode(Malo data) {
        NodoBuenoMalo newNode = new NodoBuenoMalo(data);

        if (this.getHead() == null) {
            this.setHead(newNode);
            this.setTail(newNode);

            this.getHead().setPrevio(null);
            this.getTail().setSiguiente(null);
        } else {
            this.getTail().setSiguiente(newNode);
            newNode.setPrevio(this.getTail());
            this.setTail(newNode);
            this.getTail().setSiguiente(null);
        }
        this.tamano++;
    }

    public Malo retornar(int referencia) {
        NodoBuenoMalo aux = this.getHead();
        if (estaVacia()) {
            System.out.println("Lista vacia");
            return null;
        }

        if (referencia == 0) {
            return aux.getPersonaje();
        }
        for (int i = 0; i < tamano; i++) {
            if (i == referencia) {
                return aux.getPersonaje();
            }
            aux = aux.getSiguiente();

        }

        return null;
    }

    public boolean estaVacia() {
        return tamano == 0;
    }
}
