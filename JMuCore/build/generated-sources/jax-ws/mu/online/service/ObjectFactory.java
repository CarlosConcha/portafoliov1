
package mu.online.service;

import javax.xml.bind.JAXBElement;
import javax.xml.bind.annotation.XmlElementDecl;
import javax.xml.bind.annotation.XmlRegistry;
import javax.xml.namespace.QName;


/**
 * This object contains factory methods for each 
 * Java content interface and Java element interface 
 * generated in the mu.online.service package. 
 * <p>An ObjectFactory allows you to programatically 
 * construct new instances of the Java representation 
 * for XML content. The Java representation of XML 
 * content can consist of schema derived interfaces 
 * and classes representing the binding of schema 
 * type definitions, element declarations and model 
 * groups.  Factory methods for each of these are 
 * provided in this class.
 * 
 */
@XmlRegistry
public class ObjectFactory {

    private final static QName _Exception_QNAME = new QName("http://service.online.mu/", "Exception");
    private final static QName _Estadisticas_QNAME = new QName("http://service.online.mu/", "estadisticas");
    private final static QName _EstadisticasResponse_QNAME = new QName("http://service.online.mu/", "estadisticasResponse");
    private final static QName _Hello_QNAME = new QName("http://service.online.mu/", "hello");
    private final static QName _HelloResponse_QNAME = new QName("http://service.online.mu/", "helloResponse");
    private final static QName _LoginUser_QNAME = new QName("http://service.online.mu/", "loginUser");
    private final static QName _LoginUserResponse_QNAME = new QName("http://service.online.mu/", "loginUserResponse");

    /**
     * Create a new ObjectFactory that can be used to create new instances of schema derived classes for package: mu.online.service
     * 
     */
    public ObjectFactory() {
    }

    /**
     * Create an instance of {@link Exception }
     * 
     */
    public Exception createException() {
        return new Exception();
    }

    /**
     * Create an instance of {@link Estadisticas }
     * 
     */
    public Estadisticas createEstadisticas() {
        return new Estadisticas();
    }

    /**
     * Create an instance of {@link EstadisticasResponse }
     * 
     */
    public EstadisticasResponse createEstadisticasResponse() {
        return new EstadisticasResponse();
    }

    /**
     * Create an instance of {@link Hello }
     * 
     */
    public Hello createHello() {
        return new Hello();
    }

    /**
     * Create an instance of {@link HelloResponse }
     * 
     */
    public HelloResponse createHelloResponse() {
        return new HelloResponse();
    }

    /**
     * Create an instance of {@link LoginUser }
     * 
     */
    public LoginUser createLoginUser() {
        return new LoginUser();
    }

    /**
     * Create an instance of {@link LoginUserResponse }
     * 
     */
    public LoginUserResponse createLoginUserResponse() {
        return new LoginUserResponse();
    }

    /**
     * Create an instance of {@link Statistics }
     * 
     */
    public Statistics createStatistics() {
        return new Statistics();
    }

    /**
     * Create an instance of {@link Login }
     * 
     */
    public Login createLogin() {
        return new Login();
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link Exception }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service.online.mu/", name = "Exception")
    public JAXBElement<Exception> createException(Exception value) {
        return new JAXBElement<Exception>(_Exception_QNAME, Exception.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link Estadisticas }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service.online.mu/", name = "estadisticas")
    public JAXBElement<Estadisticas> createEstadisticas(Estadisticas value) {
        return new JAXBElement<Estadisticas>(_Estadisticas_QNAME, Estadisticas.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link EstadisticasResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service.online.mu/", name = "estadisticasResponse")
    public JAXBElement<EstadisticasResponse> createEstadisticasResponse(EstadisticasResponse value) {
        return new JAXBElement<EstadisticasResponse>(_EstadisticasResponse_QNAME, EstadisticasResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link Hello }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service.online.mu/", name = "hello")
    public JAXBElement<Hello> createHello(Hello value) {
        return new JAXBElement<Hello>(_Hello_QNAME, Hello.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link HelloResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service.online.mu/", name = "helloResponse")
    public JAXBElement<HelloResponse> createHelloResponse(HelloResponse value) {
        return new JAXBElement<HelloResponse>(_HelloResponse_QNAME, HelloResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link LoginUser }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service.online.mu/", name = "loginUser")
    public JAXBElement<LoginUser> createLoginUser(LoginUser value) {
        return new JAXBElement<LoginUser>(_LoginUser_QNAME, LoginUser.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link LoginUserResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://service.online.mu/", name = "loginUserResponse")
    public JAXBElement<LoginUserResponse> createLoginUserResponse(LoginUserResponse value) {
        return new JAXBElement<LoginUserResponse>(_LoginUserResponse_QNAME, LoginUserResponse.class, null, value);
    }

}
