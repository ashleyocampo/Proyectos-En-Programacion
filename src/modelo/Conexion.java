/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package modelo;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

/**
 *
 * @author ashle
 */
public class Conexion {
     public static Connection getConexion() {

        String conexionUrl = "jdbc:sqlserver://localhost:1433;"
                + "database=proyectoEstructurasDB;"
                + "encrypt=true;"
                + "trustServerCertificate=true;"
                +"user=sa;"
                + "password=vAleria08;"
                + "loginTimeout=30;";
        try {
            Connection con = DriverManager.getConnection(conexionUrl);
            return con;
        } catch (SQLException ex) {
            System.out.println(ex.toString());
            return null;
        }
    }
}
