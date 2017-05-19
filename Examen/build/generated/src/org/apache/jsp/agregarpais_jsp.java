package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class agregarpais_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.apache.jasper.runtime.TagHandlerPool _jspx_tagPool_c_forEach_var_items;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspInit() {
    _jspx_tagPool_c_forEach_var_items = org.apache.jasper.runtime.TagHandlerPool.getTagHandlerPool(getServletConfig());
  }

  public void _jspDestroy() {
    _jspx_tagPool_c_forEach_var_items.release();
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html;charset=UTF-8");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write('\n');
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("<!DOCTYPE html>\n");
      out.write("<html>\n");
      out.write("    <head>\n");
      out.write("        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n");
      out.write("        <title>Agregar Pais</title>\n");
      out.write("        <script>\n");
      out.write("            function validarForm(formulario) {\n");
      out.write("  if(formulario.txt_nombre.value.length==0) {\n");
      out.write("    formulario.txt_nombre.focus();   \n");
      out.write("    alert('El campo Nombre esta vacio'); \n");
      out.write("    return false; \n");
      out.write("  }\n");
      out.write("  if(formulario.txt_puntaje.value.length==0) {\n");
      out.write("    formulario.txt_puntaje.focus();\n");
      out.write("    alert('El campo puntaje esta vacio');\n");
      out.write("    return false;\n");
      out.write("  }\n");
      out.write("  return true;\n");
      out.write("}\n");
      out.write("function solonumeros(e)\n");
      out.write("{\n");
      out.write("var keynum = window.event ? window.event.keyCode : e.which;\n");
      out.write("if ((keynum == 8) || (keynum == 46))\n");
      out.write("return true;\n");
      out.write(" \n");
      out.write("return /\\d/.test(String.fromCharCode(keynum));\n");
      out.write("}\n");
      out.write("function soloLetras(e){\n");
      out.write("       key = e.keyCode || e.which;\n");
      out.write("       tecla = String.fromCharCode(key).toLowerCase();\n");
      out.write("       letras = \" áéíóúabcdefghijklmnñopqrstuvwxyz\";\n");
      out.write("       especiales = \"8-37-39-46\";\n");
      out.write("\n");
      out.write("       tecla_especial = false\n");
      out.write("       for(var i in especiales){\n");
      out.write("            if(key == especiales[i]){\n");
      out.write("                tecla_especial = true;\n");
      out.write("                break;\n");
      out.write("            }\n");
      out.write("        }\n");
      out.write("\n");
      out.write("        if(letras.indexOf(tecla)==-1 && !tecla_especial){\n");
      out.write("            return false;\n");
      out.write("        }\n");
      out.write("    }\n");
      out.write("        </script>\n");
      out.write("    </head>\n");
      out.write("    <body>\n");
      out.write("        <div align=\"center\">\n");
      out.write("        <div style=\"width:400px;border:1px solid black;\">\n");
      out.write("            <table>\n");
      out.write("                <tr>\n");
      out.write("                    <td>\n");
      out.write("                        <h3>Opciones</h3>\n");
      out.write("                    </td>\n");
      out.write("                    <td>\n");
      out.write("                        <a href=\"ServRegistrar\">Agregar País</a>\n");
      out.write("                    </td>\n");
      out.write("                    <td>\n");
      out.write("                        <a href=\"ServListar\">Listar Países</a>\n");
      out.write("                    </td>\n");
      out.write("                </tr>\n");
      out.write("            </table>\n");
      out.write("            <hr  />\n");
      out.write("            <form action=\"ServRegistrar\" method=\"post\" onsubmit=\"return validarForm(this);\" >\n");
      out.write("                <p align=\"left\">Agregar Nuevo País</p>\n");
      out.write("                <table>   \n");
      out.write("                        <tr>\n");
      out.write("                            <td>Nombre</td>\n");
      out.write("                            <td><input type=\"text\" name=\"txt_nombre\" maxlength=\"20\" onkeypress=\"return soloLetras(event)\"/></td>\n");
      out.write("                        </tr>\n");
      out.write("                        <tr>\n");
      out.write("                            <td>Grupo</td>\n");
      out.write("                            <td><select name=\"cbo_grupo\">\n");
      out.write("                                    ");
      if (_jspx_meth_c_forEach_0(_jspx_page_context))
        return;
      out.write(" \n");
      out.write("                                </select></td>\n");
      out.write("                        </tr>\n");
      out.write("                        <tr>\n");
      out.write("                            <td>Puntaje</td>\n");
      out.write("                            <td><input type=\"text\" name=\"txt_puntaje\" maxlength=\"4\" size=\"5\"  onkeypress=\"return solonumeros(event);\"/></td>\n");
      out.write("                        </tr>\n");
      out.write("                        <tr>\n");
      out.write("                            <td></td>\n");
      out.write("                            <td><input type=\"submit\" value=\"Registrar\" name=\"btn_registrar\" onclick=\"validar();\"/></td>\n");
      out.write("                        </tr>                    \n");
      out.write("                </table>\n");
      out.write("\n");
      out.write("            </form>\n");
      out.write("        </div>\n");
      out.write("            </div>\n");
      out.write("    </body>\n");
      out.write("</html>\n");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }

  private boolean _jspx_meth_c_forEach_0(PageContext _jspx_page_context)
          throws Throwable {
    PageContext pageContext = _jspx_page_context;
    JspWriter out = _jspx_page_context.getOut();
    //  c:forEach
    org.apache.taglibs.standard.tag.rt.core.ForEachTag _jspx_th_c_forEach_0 = (org.apache.taglibs.standard.tag.rt.core.ForEachTag) _jspx_tagPool_c_forEach_var_items.get(org.apache.taglibs.standard.tag.rt.core.ForEachTag.class);
    _jspx_th_c_forEach_0.setPageContext(_jspx_page_context);
    _jspx_th_c_forEach_0.setParent(null);
    _jspx_th_c_forEach_0.setVar("lista");
    _jspx_th_c_forEach_0.setItems((java.lang.Object) org.apache.jasper.runtime.PageContextImpl.evaluateExpression("${sessionScope.grupos}", java.lang.Object.class, (PageContext)_jspx_page_context, null));
    int[] _jspx_push_body_count_c_forEach_0 = new int[] { 0 };
    try {
      int _jspx_eval_c_forEach_0 = _jspx_th_c_forEach_0.doStartTag();
      if (_jspx_eval_c_forEach_0 != javax.servlet.jsp.tagext.Tag.SKIP_BODY) {
        do {
          out.write("\n");
          out.write("                                        <option value=\"");
          out.write((java.lang.String) org.apache.jasper.runtime.PageContextImpl.evaluateExpression("${lista.id}", java.lang.String.class, (PageContext)_jspx_page_context, null));
          out.write('"');
          out.write('>');
          out.write((java.lang.String) org.apache.jasper.runtime.PageContextImpl.evaluateExpression("${lista.nombreGrupo}", java.lang.String.class, (PageContext)_jspx_page_context, null));
          out.write("</option>\n");
          out.write("                                    ");
          int evalDoAfterBody = _jspx_th_c_forEach_0.doAfterBody();
          if (evalDoAfterBody != javax.servlet.jsp.tagext.BodyTag.EVAL_BODY_AGAIN)
            break;
        } while (true);
      }
      if (_jspx_th_c_forEach_0.doEndTag() == javax.servlet.jsp.tagext.Tag.SKIP_PAGE) {
        return true;
      }
    } catch (Throwable _jspx_exception) {
      while (_jspx_push_body_count_c_forEach_0[0]-- > 0)
        out = _jspx_page_context.popBody();
      _jspx_th_c_forEach_0.doCatch(_jspx_exception);
    } finally {
      _jspx_th_c_forEach_0.doFinally();
      _jspx_tagPool_c_forEach_var_items.reuse(_jspx_th_c_forEach_0);
    }
    return false;
  }
}
