/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controladores;

import Entidades.Grupo;
import Entidades.Pais;
import accesoadatos.DAOGrupo;
import accesoadatos.DAOPais;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.ArrayList;
import java.util.List;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author carlos
 */
public class ServListar extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        try{
        List<Pais> paises=new ArrayList<>();
        List<Grupo> grupos=new ArrayList<>();
        if (request.getParameter("btn_eliminar")!=null) {
            String[] cheked = request.getParameterValues("chk_pais");
            for(String temp:cheked){
            Pais pais=new Pais();
            pais.setId(Integer.parseInt(temp));
            DAOPais.Eliminar(pais);
            }
            request.setAttribute("eliminado", cheked.length);
            request.getRequestDispatcher("eliminados.jsp").forward(request, response);
        }
        String seleccion=request.getParameter("cbo_grupo");
        if(request.getParameter("cbo_grupo")==null){
         seleccion="Grupo";
        }
        paises=DAOPais.Listar(seleccion);
        grupos=DAOGrupo.Listar();
        request.getSession().setAttribute("paises", paises);
        request.getSession().setAttribute("grupos", grupos);
        request.getRequestDispatcher("listarpaises.jsp").forward(request, response);
        }catch(Exception error){
            request.setAttribute("excerror", error.getMessage());
         request.getRequestDispatcher("error.jsp").forward(request, response);
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
