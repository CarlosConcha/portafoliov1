/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entidades;


import java.sql.Timestamp;
import java.util.Date;

/**
 *
 * @author carlos
 */
public class Pais {
    private int Id;
    private String NombrePais;
    private int Puntaje;
    private Timestamp FechaRegistro;
    private Grupo grupo;

    public Pais() {
    }

    public Pais(int Id, String NombrePais, int Puntaje, Timestamp FechaRegistro, Grupo grupo) {
        this.Id = Id;
        this.NombrePais = NombrePais;
        this.Puntaje = Puntaje;
        this.FechaRegistro = FechaRegistro;
        this.grupo = grupo;
    }

    public Pais(String NombrePais, int Puntaje, Timestamp FechaRegistro, Grupo grupo) {
        this.NombrePais = NombrePais;
        this.Puntaje = Puntaje;
        this.FechaRegistro = FechaRegistro;
        this.grupo = grupo;
    }

    
    public int getId() {
        return Id;
    }

    public void setId(int Id) {
        this.Id = Id;
    }

    public String getNombrePais() {
        return NombrePais;
    }

    public void setNombrePais(String NombrePais) {
        this.NombrePais = NombrePais;
    }

    public int getPuntaje() {
        return Puntaje;
    }

    public void setPuntaje(int Puntaje) {
        this.Puntaje = Puntaje;
    }

    public Timestamp getFechaRegistro() {
        
        return FechaRegistro;
    }

    public void setFechaRegistro(Timestamp FechaRegistro) {
        this.FechaRegistro = FechaRegistro;
    }

    public Grupo getGrupo() {
        return grupo;
    }

    public void setGrupo(Grupo grupo) {
        this.grupo = grupo;
    }
    
}
