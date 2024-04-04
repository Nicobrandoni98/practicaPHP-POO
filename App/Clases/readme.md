public: podemos usarlo en cualquier parte del programa, incluyendo otras clases o en instancias de objetos(crear objeto)

protected: podemos usarlo en la misma clase o en otra clase (extends).

private: podemos usarlo en la misma clase.

Getter: Permite obtener el valor de una propiedad de la clase y utilizar dicho valor en diferentes metodos

Setter: Brinda acceso a propiedades especificas para poder asignar un valor fuera de la clase

This: podemos acceder a los metodos y atributos NO estaticos, ya sean de la propia clase o cuando usamos la herencia (extends) 

Self:: Nos da acceso a todas las variables o metodos estaticos de LA MISMA CLASE.

Parent:: Accede a una constante o metodo estatico de la clase PADRE

Traits: 



AUTOLOAD: en lugar de tener que cargar cada una de las clases de nuestra aplicacion manualmente podemos crear un autoloader. Esta destinado a cargar de forma automatica las clases utilizadas.

Cada vez que se intenta inicializar una clase y la clase no existe, el nom de la clase se pasa al AUTOLOADER y este es ejecutado. En el AUTOLOADER podemos automatizar el proceso de carga sin tener que incluir manualmente cada archivo y ademas nos permite hacer el codigo mas rapido, pues solo se cargaran las clases que efectivamente se utilicen.