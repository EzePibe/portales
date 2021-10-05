<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'image' => '1633459787.jpg',
                'title' => 'Próximamente: nuevo cliente de Riot',
                'text' => '¡Nos emociona anunciar que nos estamos preparando para lanzar un nuevo cliente de Riot en las próximas semanas! <br> <b>Así que, ¿por qué lanzar el Cliente de Riot ahora?</b> <br> Durante los últimos años, hemos logrado justificar la "s" de Riot Games, y ustedes han creado comunidades diversas y prósperas alrededor de Teamfight Tactics, Legends of Runeterra, VALORANT, Wild Rift y, por supuesto, League of Legends. Queríamos desarrollar un cliente que les proporcionara la mejor experiencia posible y les permitiera entrar rápidamente a su juego de escritorio favorito a la vez que les diera la oportunidad de explorar todo lo que Riot tiene para ofrecer. <br> Todos los títulos de Riot ya tienen implementado este cliente multijuego, pero está disfrazado para cada juego individual y no cuenta con una forma de acceder a la biblioteca de juegos de Riot. Ahora agregaremos una nueva interfaz de usuario, funciones optimizadas y muchas cosas más luego del lanzamiento. Con el nuevo cliente de Riot será más sencillo descubrir y acceder a todo lo que tenemos para ofrecer. Podrán acceder a todos los juegos de escritorio de Riot desde un solo cliente, en el que cada uno tendrá su propia página exclusiva con el contenido específico del mismo, incluyendo noticias recientes y eventos. ¡Podrán tener un escritorio limpio con un único lanzador para el cliente de Riot en donde estarán todos sus juegos favoritos de Riot! Sin embargo, podrán mantener los accesos directos a los juegos de escritorio para tener una ruta directa a sus juegos favoritos si así lo prefieren. <br> <b>Calendario del lanzamiento del cliente de Riot</b> <br> Queremos ser lo más transparentes posible sobre el lanzamiento para evitar confusiones y asegurar una transición sin complicaciones. <br> El lanzamiento progresivo del cliente de Riot comenzará el 20 de septiembre. Luego de algunas semanas para asegurar su estabilidad, lanzaremos el cliente a nivel mundial a partir del 4 de octubre. Se debe tener en cuenta que la fecha para el lanzamiento a nivel mundial podría cambiar si el equipo necesita implementar actualizaciones o cambios. Queremos que todos tengan la mejor experiencia posible cuando lo hayamos lanzado por completo.',
                'date' => date('2021-08-15'),
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s'),
            ],
            [
                'image' => '1633461249.jpg',
                'title' => 'CTRL+F PRÓXIMO AGENTE',
                'text' => 'Ya pasó un tiempo desde que nuestro roboagente KAY/O salió a neutralizar Radiantes. Mientras él ha estado allá afuera contribuyendo al número total de destellos, nosotros hemos estado refinando nuestro próximo agente. <br> Dimos un paso atrás y pensamos en diferentes maneras de aportar otro Centinela a la alineación. Un Centinela que se centra en las jugadas mecánicas, con un enfoque secundario en las armas para un toque adicional. No vamos a revelar mucho más, pero sepan que cuando consigan ese momento soñado, ¡será magnifique!',
                'date' => date('2021-09-09'),
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s'),
            ],
            [
                'image' => '1633461422.jpg',
                'title' => 'NIVEA SE UNE A VALORANT GAME CHANGERS',
                'text' => 'Agentes, como les comentamos a inicios de este año, desde VALORANT Esports tenemos un objetivo claro en la creación de nuevas oportunidades y la visibilización del talento de mujeres y otros géneros marginados. En esa línea, nos complace confirmar con todos ustedes nuestra alianza con Nivea, marca número 1 del mundo* en el cuidado de la piel. <br> Junto a ellos, seguiremos liderando la iniciativa VALORANT Game Changers, que busca dar visibilidad a la diversidad de género en la industria de los esports. <br> Entre los planes que tenemos a corto plazo, daremos visibilidad a las historias de jugadoras destacadas en la escena de los esports en México, las Game Changers en la industria. Entre las figuras de la campaña se encuentran @EritraJinx, @GucciHabb y @Schebeu. <br> <b>¡Pero hey! ¡Tú también eres Game Changer! Haz parte de la campaña contándonos tu historia de Esports.</b> <br> Además de destacar estas historias, pronto se acercan competencias que continuarán las ediciones anteriores de VALORANT Game Changers. Para ser las primeras en enterarse de inscripciones, formato y premios, pueden seguir la cuenta oficial @nivea_mexico y los hashtags #NiveaGameChangers #Nivea #VALORANT, además de las redes de @VALORANTlatam y @GirlPower_LA. <br> “Desde inicios de 2021, cuando a nivel global anunciamos la iniciativa Game Changers en VALORANT que incluía una serie de torneos regionales con equipos conformados por jugadoras, sabíamos que queríamos sumar más agentes de cambio al proyecto. Nos entusiasma que una marca como NIVEA, con quien ya hemos trabajado en otras ocasiones, vea en VALORANT una comunidad que comparte su visión de diversidad e inclusión”, anotó Daniel Morales, Partnerships & Alliances Manager para Riot Games Latinoamérica. <br> “En NIVEA llevamos más de 130 años apoyando a las mujeres para que se sientan bien en su propia piel. Según un estudio realizado por la marca 1 de cada 2 mujeres se ha sentido excluida del mundo del gaming y a través de esta colaboración con Riot Games buscamos empoderar a las mujeres gamers e inspirarlas para alcanzar sus metas logrando una mayor inclusividad, en línea con nuestro propósito Care Beyond Skin”, destacó Santiago Nettle, Director de Marketing de NIVEA para el Norte de Latinoamérica. <br> La misión de tener un ambiente competitivo cada vez más seguro sigue en marcha. Nos complace contar con todo su apoyo en VALORANT Game Changers y los invitamos a seguir al pendiente de esta campaña que mejora la experiencia de comunidad de nuestro juego. ¡GG!',
                'date' => date('2021-09-25'),
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s'),
            ],
            [
                'image' => null,
                'title' => 'ANÉCDOTAS DE FORMACIÓN: ZEDD',
                'text' => 'Puede que muchos ya se hayan topado dentro del juego con alguien presumiendo la línea de diseños Spectrum y hayan terminado siendo derrotados (como ser hecho trizas en medio de un entorno inspirado en música electrónica). En ese sentido, nos parece justo decirte que la mente detrás del diseño de Spectrum también podría ser la misma que ha estado engrosando su lista de asesinatos a costa tuya. <br> Nos referimos a Anton Zaslavski, mejor conocido como Zedd. Este DJ de rango Inmortal, cuyo talento en el teclado es indiscutible, decidió plasmar su amor y destreza por la música y por VALORANT para cocrear la línea Spectrum con la ayuda de nuestro equipo de contenido prémium. <br> Preeti Khanolkar, productora sénior en dicho equipo, ha dicho que considera a Zedd un desarrollador de juegos en toda regla. Y dada la cantidad de diseño de sonido y habilidad creativa que Zedd le imprimió a Spectrum, Preeti no exagera. <br> “Para mí, hay más elementos a considerar en la creación de videojuegos que en la composición musical", mencionó Zedd. "Uno siempre quiere ir un paso más allá y crear algo nuevo y fresco... Aprender cómo funcionan las animaciones y el motor de audio que se usa en el juego fue una experiencia increíble”. <br> Zedd agregó que diseñar su propia línea de diseños para un FPS ha sido un sueño hecho realidad. Anton mencionó en ocasiones anteriores que si bien fueron videojuegos como Counter Strike: Source y Overwatch los que despertaron su curiosidad por los juegos de disparos tácticos, VALORANT es el juego que tiene actualmente toda su atención. <br> El sendero de Zedd comenzó en la fase alfa y desde entonces logró llegar hasta el rango Inmortal. Aunque es posible que reconozcas a Zedd por sus colaboraciones con artistas de la talla de Ariana Grande o Kehlani, entre otros, él prefiere ser recordado por su importantísimo rol en VALORANT. <br> “Quiero ser el MVP. Me gusta entrar y abrir posibilidades para mi equipo. Así que se podría decir que me gusta hacer ambas cosas”, puntualizó. <br> Aunque no puede disfrutar de su bebida favorita antes de una partida de VALORANT como lo haría antes de un show, sí puede replantear su estrategia y jugar en “cada ronda como si estuviera 0 a 0”. <br> Y para quienes se preguntan cómo es que alguien puede componer y e interpretar música, ser uno de los rangos más altos en VALORANT y colaborar en la creación de una línea de diseños al mismo tiempo, Zedd comentó que su secreto radica en saber administrar sus horarios. <br> “Mis mañanas las dedico a mi salud y a hacer ejercicio. En la tarde me concentro en componer música y, ya por la noche, solo juego videojuegos. Procuro mantener ese ritmo para llevar una vida feliz y bien balanceada”. <br> Aun así, Zedd también nos recuerda que es importante tomarse un descanso incluso de nuestras metas. El año pasado, decidió tomarse unas vacaciones de su trabajo musical para dedicar su tiempo a los podcasts. Este receso hizo que “escuchar música volviera a ser una actividad que lo llenara de emoción”. <br> Por suerte para nosotros, su decisión hizo que creara la línea de diseños Spectrum de VALORANT y, quién sabe, tal vez hasta haga un remix para el juego. <br> “Estoy muy sorprendido por lo que uno puede llegar a lograr al final. A veces, para soñar en grande, se deben dar pasos pequeños”, comentó. “Al final, creamos mucho más de lo que creímos que podíamos hacer. Los desarrolladores crearon tecnología inédita en el juego hasta ahora. En resumen: ¡cualquier cosa es posible!”.',
                'date' => date('2021-10-05'),
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s'),
            ],
        ]);
    }
}
