/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package modelo;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import javax.swing.JTable;
import javax.swing.table.DefaultTableModel;

/**
 *
 * @author ashle
 */
public class BuenoMaloDao {
  
    PreparedStatement ps;
    Connection con;
    ResultSet rs;
    Conexion conectar = new Conexion();
    private ListaDobleBuenoYMalo l;

    public ListaDobleBuenoYMalo getL() {
        return l;
    }

    public void setL(ListaDobleBuenoYMalo l) {
        this.l = l;
    }
    public ListaDobleBuenoYMalo Lista() {
        setL(new ListaDobleBuenoYMalo());
        
        String sql = "Select * from RegistroCartas as rC inner join usuarios_Cartas "
                + "as uS on uS.Codigo_Card = rC.Codigo_C inner join usuarios as"
                + " u on u.Codigo_Usuarios = uS.Codigo_U where  u.Codigo_Usuarios = 1 "
                + "and rC.Repetido = 'No'";
        try {
            con = conectar.getConexion();
            ps = con.prepareStatement(sql);
            rs = ps.executeQuery();
            
            while (rs.next()) {
                String personaje, disposicion, oficio, especie, arma, rareza;
                int codigo;
                codigo = Integer.parseInt(rs.getString("Codigo_C"));
                personaje = rs.getString("Personaje");
                disposicion = rs.getString("Disposición");
                oficio = rs.getString("Oficio");
                especie = rs.getString("Especie");
                arma = rs.getString("Arma");
                rareza = rs.getString("Rareza");
                this.l.insertNode(new Malo(codigo ,personaje, disposicion, oficio, especie, arma, rareza));
            }
        } catch (SQLException e) {
            System.out.println("Error al buscar los datos " + e.getMessage());
        }
       return l;
    }

      
    public void filtrarTablaPorNombre(JTable table, String filtro) {
        this.l =this.Lista();
        String[] titulos = {"CODIGO", "PERSONAJE", "DISPOSICIÓN", "OFICIO", "ESPECIE", "ARMA", "RAREZA"};
        String[] registros = new String[7];
        DefaultTableModel modelo;
        modelo = new DefaultTableModel(null, titulos);
        
        for (int i = 0; i < this.l.getTamano(); i++) {
            NodoBuenoMalo n = new NodoBuenoMalo();
            n.setPersonaje(this.l.retornar(i));
                registros[0] = String.valueOf(n.getPersonaje().getCodigo());
                registros[1] = n.getPersonaje().getPersonaje();
                registros[2] = n.getPersonaje().getDisposicion();
                registros[3] = n.getPersonaje().getOficio();
                registros[4] = n.getPersonaje().getEspecie();
                registros[5] = n.getPersonaje().getArma();
                registros[6] = n.getPersonaje().getRareza();
                modelo.addRow(registros);
        }
        table.setModel(modelo);
    }
    
}
    
