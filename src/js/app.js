try {
	// Declaración de dependencias de JavaScript del proyecto
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) {
	// Cláusulas catch condicionales conforme a la especificación ECMAScript por tipo
  	if (e instanceof TypeError) {
        // sentencias para manejar excepciones TypeError: A type error has occurred
    } else if (e instanceof RangeError) {
        // sentencias para manejar excepciones RangeError: A number "out of range" has occurred
    } else if (e instanceof EvalError) {
        // sentencias para manejar excepciones EvalError: An error has occurred in the eval() function
    } else if (e instanceof ReferenceError) {
        // sentencias para manejar excepciones ReferenceError: An illegal reference has occurred
    } else if (e instanceof SyntaxError) {
        // sentencias para manejar excepciones SyntaxError: A syntax error has occurred
    } else if (e instanceof URIError) {
        // sentencias para manejar excepciones URIError: An error in encodeURI() has occurred
    } else {
        // sentencias para manejar cualquier excepción no especificada
        console.log(e.name);  	// muestra 'The name'
  		console.log(e.message); // muestra 'The message'
    }
}

/**
 * [axios description] Requerimos Axios
 * @type {[type]}
 */
window.axios = require('axios');

/**
 * [Vue description] Requerimos Vue
 * @type {[type]}
 */
window.Vue = require('vue');

/**
 * [app description]: Instanciamos Vue en 'app'
 * @type {Vue}
 */
const app = new Vue({
    el: '#app',
    data: {
    	msg: 'Starter-Codeigniter-Bootstrap 3.0'
	}
});