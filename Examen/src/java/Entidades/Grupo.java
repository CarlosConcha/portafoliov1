/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entidades;

/**
 *
 * @author carlos
 */
public class Grupo {
    private int Id;
    private String NombreGrupo;

    public Grupo() {
    }

    public Grupo(int Id, String NombreGrupo) {
        this.Id = Id;
        this.NombreGrupo = NombreGrupo;
    }

    public Grupo(String NombreGrupo) {
        this.NombreGrupo = NombreGrupo;
    }

    
    public int getId() {
        return Id;
    }

    public void setId(int Id) {
        this.Id = Id;
    }

    public String getNombreGrupo() {
        return NombreGrupo;
    }

    public void setNombreGrupo(String NombreGrupo) {
        this.NombreGrupo = NombreGrupo;
    }
    
}
