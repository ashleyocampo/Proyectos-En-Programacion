/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.avanceproyecto;

/**
 *
 * @author lgfon
 */
public class proyecto {
        //Atributos
    
    //Donantes
    private String nombre;	
    private int cedula;	
    private int edad;	
    private String grupoSanguineo;	
    private String enfermedad;		

    // Pacientes
    private String nombreP;	
    private int	cedulaP	;
    private int	telefono;	
    private String direccion;	
    private String gruSanguineoP;	
    private String enfermedadPatente;
 
    //Banco
    private String nombreBanco;	
    private String direccionB;	
    private int	telefonoB;	
    private String nombreDB;	

    //Constructor
    public proyecto (){
        
        //Donantes
        nombre = "";
        cedula = 0;
        telefono =0;
        grupoSanguineo ="";
        enfermedadPatente = "";
        
        //Pacientes 
        nombreP="";
        cedulaP = 0;
        edad =0;
        direccion ="";
        gruSanguineoP="";
        enfermedad ="";
        
        //Banco
        nombreBanco ="";	 
        direccionB ="";
        telefonoB =0;
        nombreDB = "";
    }
    
    //Setters y getters
    public String getNombre() {
        return nombre;
    }

    public String setNombre(String pNombre) {
        return nombre = pNombre;
    }

    public int getCedula() {
        return cedula;
    }

    public void setCedula(int pCedula) {
        cedula = pCedula;
    }

    public int getEdad() {
        return edad;
    }

    public void setEdad(int pEdad) {
        edad = pEdad;
    }

    public String getGrupoSanguineo() {
        return grupoSanguineo;
    }

    public void setGrupoSanguineo(String pGrupoSanguineo) {
        grupoSanguineo = pGrupoSanguineo;
    }

    public String getEnfermedad() {
        return enfermedad;
    }

    public void setEnfermedad(String pEnfermedad) {
        enfermedad = pEnfermedad;
    }

    public String getNombreP() {
        return nombreP;
    }

    public void setNombreP(String pNombreP) {
        nombreP = pNombreP;
    }

    public int getCedulaP() {
        return cedulaP;
    }

    public void setCedulaP(int pCedulaP) {
        this.cedulaP = pCedulaP;
    }

    public int getTelefono() {
        return telefono;
    }

    public void setTelefono(int pTelefono) {
        telefono = pTelefono;
    }

    public String getDireccion() {
        return direccion;
    }

    public void setDireccion(String pDireccion) {
        direccion = pDireccion;
    }

    public String getGruSanguineoP() {
        return gruSanguineoP;
    }

    public void setGruSanguineoP(String pGruSanguineoP) {
        gruSanguineoP = pGruSanguineoP;
    }

    public String getEnfermedadPatente() {
        return enfermedadPatente;
    }

    public void setEnfermedadPatente(String pEnfermedadPatente) {
        enfermedadPatente = pEnfermedadPatente;
    }

    public String getNombreBanco() {
        return nombreBanco;
    }

    public void setNombreBanco(String pNombreBanco) {
        nombreBanco = pNombreBanco;
    }

    public String getDireccionB() {
        return direccionB;
    }

    public void setDireccionB(String pDireccionB) {
        direccionB = pDireccionB;
    }

    public int getTelefonoB() {
        return telefonoB;
    }

    public void setTelefonoB(int pTelefonoB) {
        telefonoB = pTelefonoB;
    }

    public String getNombreDB() {
        return nombreDB;
    }

    public void setNombreDB(String pNombreDB) {
        nombreDB = pNombreDB;
    }
}
