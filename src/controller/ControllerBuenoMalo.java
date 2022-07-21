/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package controller;

import javax.swing.JTable;
import modelo.BuenoMaloDao;
import vista.frmListaBuenoMalo;

/**
 *
 * @author ashle
 */
public class ControllerBuenoMalo {
    frmListaBuenoMalo vistaLista = new frmListaBuenoMalo();
    BuenoMaloDao dao = new BuenoMaloDao();

    public ControllerBuenoMalo(frmListaBuenoMalo frm) {
        this.vistaLista = frm;
    }

    public void filtrarTablaPorNombre(JTable table, String filtro) {
        dao.filtrarTablaPorNombre(table, filtro);
    }

    public void inicio() {
        filtrarTablaPorNombre(vistaLista.tblBuenoMalo, "");
    }
}
