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
import java.util.List;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author carlos
 */
public class ServRegistrar extends HttpServlet {

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
        try {
            List<Grupo> grupos = null;
            String nombre = "";
            int grupo = 0;
            int puntaje = 0;
            boolean resultado = false;
            // <editor-fold defaultstate="collapsed" desc="Registro">
            if (request.getParameter("btn_registrar") != null) {
                nombre = request.getParameter("txt_nombre");
                grupo = Integer.parseInt(request.getParameter("cbo_grupo"));
                puntaje = Integer.parseInt(request.getParameter("txt_puntaje"));
                Pais pais = new Pais();
                pais.setNombrePais(nombre);
                pais.setPuntaje(puntaje);
                pais.setGrupo(new Grupo(grupo, ""));
                for (Pais temp : DAOPais.Listar("")) {
                    if (temp.getNombrePais().toUpperCase().trim().equals(nombre.toUpperCase().trim())) {
                        resultado = true;
                    }
                }
                if (resultado) {
                      response.setContentType("text/html;charset=UTF-8");
                        try (PrintWriter out = response.getWriter()) {
                            out.println("<!DOCTYPE html>");
                            out.println("<html>");
                            out.println("<head>");
                            out.println("<title>Mensaje</title>");
                            out.println("<script type=\"text/javascript\">");
                            out.println("alert('El pais Ya existe, Pais NO INGRESADO');");
                            out.println("location='agregarpais.jsp';");
                            out.println("</script>");
                            out.println("</head>");
                            out.println("<body>");
                            out.println("</body>");
                            out.println("</html>");
                        }
                    
                } else {
                    if (DAOPais.Insertar(pais)) {
                        response.setContentType("text/html;charset=UTF-8");
                        try (PrintWriter out = response.getWriter()) {                     
                            out.println("<!DOCTYPE html>");
                            out.println("<html>");
                            out.println("<head>");
                            out.println("<title>Mensaje</title>");
                            out.println("<script type=\"text/javascript\">");
                            out.println("alert('Ingreso Correcto');");
                            out.println("location='agregarpais.jsp';");
                            out.println("</script>");
                            out.println("</head>");
                            out.println("<body>");
                            out.println("</body>");
                            out.println("</html>");
                        }
                    }
                  
                }
            }
// </editor-fold>
            grupos = DAOGrupo.Listar();
            request.getSession().setAttribute("grupos", grupos);
            request.getRequestDispatcher("agregarpais.jsp").forward(request, response);
        } catch (Exception error) {
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
