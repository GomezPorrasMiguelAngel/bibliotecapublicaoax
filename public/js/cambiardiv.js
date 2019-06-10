$(document).ready(function() {
    $("#objetivos").click(function() {
        $("#micapa").html("<h3>Objetivos</h3>" +
            "<h5>General</h5>" +
            "<p>" +
            "Facilitar recursos informativos y prestar servicios mediante diversos medios con el fin de cubrir las necesidades de personas y grupos de materia de instrucción, información y perfeccionamiento personal comprendidas actividades intelectuales de entretenimiento y ocio." +
            "</p>" +
            "<h5>Específicos.</h5>" +
            "<p>" +
            "•	Inculcar y fomentar en los ciudadanos el hábito y el placer de la lectura y el aprendizaje." +
            "•	Garantizar a todos los ciudadanos el acceso a la información." +
            "•	Ofrecer oportunidades para realizar experiencias de creación y utilización de información con el fin de adquirir conocimientos, comprender, desarrollar la imaginación y entretenerse." +
            "•	Brindar posibilidades para el desarrollo personal creativo." +
            "•	Desarrollar la imaginación y creatividad a través de los recursos que ofrece la biblioteca." +
            "•	Profundizar en los hábitos de comportamiento en la biblioteca." +
            "•	Aprender a buscar, organizar y aplicar la información disponible." +
            "</p>");
    });
    $("#vision").click(function() {
        $("#micapa").html("<h3>Visión</h3>" +
            "<p>Ser un espacio moderno y accesible para los miembros de la comunidad y poder convertirnos en un centro cultural de lectura educativa y recreativa haciendo uso de las nuevas tecnologías.</p>");
    });
    $("#mision").click(function() {
        $("#micapa").html(
            "<h3>Misión</h3>" +
            "<p>Contribuir al desarrollo integral de los miembros de la comunidad, facilitar el acceso equitativo, libre y gratuito al conocimiento y la cultura, y fomentar la lectura.</p>");
    });
    $("#antecedentes").click(function() {
        $("#micapa").html(
            "<h3>Antecedentes</h3>" +
            "<p>Preocupado por fomentar la lectura entre la población mexicana, José Vasconcelos ejecutó uno de los proyectos bibliotecarios más extensos e importantes que se hayan realizado en la historia de México. Por primera vez se crearon cientos de bibliotecas populares en todos los estados de la república, y se concibió a la biblioteca como un elemento primordial para el desarrollo del país.</p>" +
            "<p>La Ley Orgánica de la SEP asignó al Departamento de Bibliotecas, la creación y funcionamiento de las bibliotecas populares en todo el territorio nacional, y el cuidado y administración de la Biblioteca Nacional y de todos los recintos bibliotecarios dependientes de la SEP. Sus primeros directores fueron Vicente Lombardo Toledano y Jaime Torres Bodet.</p>" +
            "<p>El Departamento de Bibliotecas inició la capacitación técnica del personal bibliotecario a través de cursos básicos y especializados, con la finalidad de desarrollar los servicios de las bibliotecas públicas en México, además de patrocinar tres congresos de bibliotecarios que se realizaron en 1927, 1928 y 1944.</p>" +
            "<p>Al paso de los años, este Departamento se convierte en la Dirección de Bibliotecas de la Subsecretaría de Cultura de la SEP, y posteriormente en Dirección General de Publicaciones y Bibliotecas. En agosto de 1985, por acuerdo del secretario de Educación Pública, se crea la Dirección General de Bibliotecas como unidad independiente, al igual que la Dirección General de Publicaciones.</p>" +
            "<p>En diciembre de 1988 nace el Consejo Nacional para la Cultura y las Artes, como órgano desconcentrado de la SEP, y se le asignan las unidades administrativas e instituciones públicas que desempeñan funciones relacionadas con la promoción y difusión de la cultura y las artes, y la organización de las bibliotecas públicas.</p>"

        );
    });
});