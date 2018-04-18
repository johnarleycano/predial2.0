/**
 * Imprime mensaje en consola
 * 
 * @param  [string] mensaje Mensaje a imprimir
 * 
 * @return [void]
 */
function imprimir(mensaje, tipo = null)
{
    switch(tipo) {
        case "tabla":
            console.table(mensaje)
        break;

        case "tiempo_inicio":
            console.time(mensaje)
        break;

        case "tiempo_final":
            console.timeEnd(mensaje)
        break;

        case "grupo":
            console.group(mensaje)
        break;

        default:
            console.log(mensaje)
    }
}