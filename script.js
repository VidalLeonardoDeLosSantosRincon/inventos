const print  = console.log;

function Persona(nombre,apellido){
    this.nombre = nombre;
    this.apellido = apellido;
}

Persona.prototype.saludar = ({nombre,apellido})=>{
    return `${nombre} ${apellido}`;
}

let fran = new Persona("Francisco","Castle");
print(fran.saludar(fran));

function Estudiante(nombre,apellido,nivel){
    Persona.call(this,nombre,apellido);
    this.nivel = nivel;
}

Estudiante.prototype = Object.create(Persona.prototype);

let pedro  = new Estudiante("Pedro","Segura",5);
print(pedro.saludar(pedro);