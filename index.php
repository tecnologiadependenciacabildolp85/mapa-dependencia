<?php
// Diccionarios para etiquetas
$plazas_areas = array(1 => "Mayores", 2 => "Discapacidad (DI)", 3 => "Salud mental", 4 => "Mayores/Discapacidad(M/D)");
$plazas_tipos = array(1 => "Residencia", 2 => "Diurna", 3 => "Alojamiento tutelado", 4 => "Domicilio", 5 => "SPAP", 6 => "Teleasistencia basica", 7 => "SAD", 8 => "Teleasistencia avanzada");
$plazas_requerimientos = array(1 => "Alto", 2 => "Medio", 3 => "Bajo", 4 => "Alto/Medio");
$plazas_perfiles = array(1 => "No aplica", 2 => "Intelectual sin NTP", 3 => "Intelectual con NTP (DI NTP)", 4 => "Físico", 5 => "Demencia", 6 => "Psicogeriatría (DI PS)", 7 => "Trastorno conducta (DI T)", 8 => "Intelectual con NTP+ (DI I)", 9 => "Mayores (MAYSA)", 10 => "Discapacidad Intelectual Salud Mental (DI SM)", 11 => "Mayores/Discapacidad (M/D)");

// ==================== LISTA COMPLETA DE CENTROS ====================
$centros_lista = [
    ['nombre' => 'Centro Residencial La Dehesa', 'descripcion' => 'S.C. de La Palma - Residencia de Mayores', 'lat' => 28.69652670, 'lng' => -17.76998623, 'url' => 'https://dependencialapalma.com/red-insular/mayores/residencia-la-dehesa/', 'municipio' => 'santa-cruz', 'area' => 1, 'tipo_area' => 1, 'requerimiento' => 4, 'perfil' => 0],
    ['nombre' => 'Centro Residencial Puntallana', 'descripcion' => 'Residencia de Mayores', 'lat' => 28.73974236, 'lng' => -17.74573970, 'url' => 'https://dependencialapalma.com/red-insular/mayores/residencia-puntallana/', 'municipio' => 'puntallana', 'area' => 1, 'tipo_area' => 1, 'requerimiento' => 4, 'perfil' => 0],
    ['nombre' => 'Centro Residencial Garafía', 'descripcion' => 'Residencia de Mayores', 'lat' => 28.82984070, 'lng' => -17.94620662, 'url' => 'https://dependencialapalma.com/red-insular/mayores/residencia-garafia/', 'municipio' => 'garafia', 'area' => 1, 'tipo_area' => 1, 'requerimiento' => 4, 'perfil' => 0],
    ['nombre' => 'Centro Residencial Barlovento', 'descripcion' => 'Residencia de Mayores', 'lat' => 28.82842285, 'lng' => -17.80342002, 'url' => 'https://dependencialapalma.com/red-insular/mayores/residencia-barlovento/', 'municipio' => 'barlovento', 'area' => 1, 'tipo_area' => 1, 'requerimiento' => 4, 'perfil' => 0],
    ['nombre' => 'Centro Residencial Tijarafe', 'descripcion' => 'Residencia de Mayores', 'lat' => 28.71047999, 'lng' => -17.95639851, 'url' => 'https://dependencialapalma.com/red-insular/mayores/residencia-tijarafe/', 'municipio' => 'tijarafe', 'area' => 1, 'tipo_area' => 1, 'requerimiento' => 4, 'perfil' => 0],
    ['nombre' => 'Centro Residencial San Andrés y Sauces', 'descripcion' => 'Residencia de Mayores', 'lat' => 28.80482430, 'lng' => -17.77494340, 'url' => 'https://dependencialapalma.com/red-insular/mayores/residencia-san-andres-y-sauces/', 'municipio' => 'san-andres', 'area' => 1, 'tipo_area' => 1, 'requerimiento' => 4, 'perfil' => 0],
    ['nombre' => 'Centro Residencial Villa de Mazo', 'descripcion' => 'Casa de Acogida Villa de Mazo', 'lat' => 28.60441782, 'lng' => -17.77973514, 'url' => 'https://dependencialapalma.com/red-insular/mayores/casa-de-acogida-villa-de-mazo/', 'municipio' => 'mazo', 'area' => 1, 'tipo_area' => 1, 'requerimiento' => 4, 'perfil' => 0],
    ['nombre' => 'Centro Residencial Sor Josefa Argote', 'descripcion' => 'Centro Asistencial de Mayores', 'lat' => 28.82785330, 'lng' => -17.85933660, 'url' => 'https://dependencialapalma.com/red-insular/mayores/centro-asistencial-de-mayores-sor-josefa-argote/', 'municipio' => 'garafia', 'area' => 1, 'tipo_area' => 1, 'requerimiento' => 3, 'perfil' => 0],
    ['nombre' => 'Centro Residencial Las Indias', 'descripcion' => 'Fuencaliente - Centro de Acogida', 'lat' => 28.50204250, 'lng' => -17.86368570, 'url' => 'https://dependencialapalma.com/red-insular/mayores/centro-de-acogida-de-las-indias/', 'municipio' => 'fuencaliente', 'area' => 1, 'tipo_area' => 1, 'requerimiento' => 4, 'perfil' => 0],
    ['nombre' => 'Centro Residencial Nina Jaubert (Mayores)', 'descripcion' => 'Centro Residencial de Personas Mayores', 'lat' => 28.64495098, 'lng' => -17.78767465, 'url' => 'https://dependencialapalma.com/red-insular/mayores/centro-residencial-de-personas-mayores-nina-jaubert/', 'municipio' => 'brena-alta', 'area' => 1, 'tipo_area' => 1, 'requerimiento' => 4, 'perfil' => 0],
    ['nombre' => 'Centro Residencial Puntagorda', 'descripcion' => 'Residencia de Mayores', 'lat' => 28.77046782, 'lng' => -17.97879754, 'url' => 'https://dependencialapalma.com/red-insular/mayores/centro-residencial-puntagorda/', 'municipio' => 'puntagorda', 'area' => 1, 'tipo_area' => 1, 'requerimiento' => 4, 'perfil' => 0],
    ['nombre' => 'Centro Residencial Fundación Canaria Solidaridad', 'descripcion' => 'Los Llanos de Aridane', 'lat' => 28.65892930, 'lng' => -17.91121729, 'url' => 'https://dependencialapalma.com/red-insular/mayores/centro-residencial-fundacion-canaria-solidaridad-la-palma/', 'municipio' => 'los-llanos', 'area' => 1, 'tipo_area' => 1, 'requerimiento' => 3, 'perfil' => 0],
    ['nombre' => 'Centro Residencial Tazacorte', 'descripcion' => 'Residencia de Mayores', 'lat' => 28.64472954, 'lng' => -17.93402486, 'url' => 'https://dependencialapalma.com/red-insular/mayores/residencia-de-mayores-de-tazacorte/', 'municipio' => 'tazacorte', 'area' => 1, 'tipo_area' => 1, 'requerimiento' => 4, 'perfil' => 0],
    ['nombre' => 'Centro de Día San Andrés y Sauces', 'descripcion' => 'Atención Diurna', 'lat' => 28.80521915, 'lng' => -17.77500241, 'url' => 'https://dependencialapalma.com/red-insular/mayores/centro-de-dia-de-san-andres-y-sauces/', 'municipio' => 'san-andres', 'area' => 1, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 0],
    ['nombre' => 'Centro de Día Los Llanos de Aridane', 'descripcion' => 'Atención Diurna', 'lat' => 28.66010907, 'lng' => -17.91406123, 'url' => 'https://dependencialapalma.com/red-insular/mayores/centro-de-dia-de-los-llanos-de-aridane/', 'municipio' => 'los-llanos', 'area' => 1, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 0],
    ['nombre' => 'Centro de Día Gallegos', 'descripcion' => 'Atención Diurna', 'lat' => 28.82899891, 'lng' => -17.83991170, 'url' => 'https://dependencialapalma.com/red-insular/mayores/centro-de-dia-de-gallegos/', 'municipio' => 'barlovento', 'area' => 1, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 0],
    ['nombre' => 'Centro de Día Tijarafe', 'descripcion' => 'Atención Diurna', 'lat' => 28.71034870, 'lng' => -17.95652530, 'url' => 'https://dependencialapalma.com/red-insular/mayores/centro-de-dia-de-tijarafe/', 'municipio' => 'tijarafe', 'area' => 1, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 0],
    ['nombre' => 'Centro de Día Tazacorte', 'descripcion' => 'Atención Diurna', 'lat' => 28.64435000, 'lng' => -17.93382850, 'url' => 'https://dependencialapalma.com/red-insular/mayores/centro-de-dia-tazacorte/', 'municipio' => 'tazacorte', 'area' => 1, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 0],
    ['nombre' => 'Centro de Día Barlovento', 'descripcion' => 'Atención Diurna', 'lat' => 28.82844060, 'lng' => -17.80374097, 'url' => 'https://dependencialapalma.com/red-insular/mayores/centro-de-dia-de-barlovento/', 'municipio' => 'barlovento', 'area' => 1, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 0],
    ['nombre' => 'Centro de Día Villa de Mazo', 'descripcion' => 'Atención Diurna', 'lat' => 28.60424897, 'lng' => -17.77959739, 'url' => 'https://dependencialapalma.com/red-insular/mayores/centro-de-dia-de-villa-de-mazo/', 'municipio' => 'mazo', 'area' => 1, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 0],
    ['nombre' => 'Centro de Día Breña Alta', 'descripcion' => 'Atención Diurna', 'lat' => 28.66189032, 'lng' => -17.78810882, 'url' => 'https://dependencialapalma.com/red-insular/mayores/centro-de-dia-de-brena-alta/', 'municipio' => 'brena-alta', 'area' => 1, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 0],
    ['nombre' => 'Centro de Día Puntallana', 'descripcion' => 'Atención Diurna', 'lat' => 28.73959180, 'lng' => -17.74573970, 'url' => 'https://dependencialapalma.com/red-insular/mayores/centro-de-dia-de-puntallana/', 'municipio' => 'puntallana', 'area' => 1, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 0],
    ['nombre' => 'Centro de Día Breña Baja', 'descripcion' => 'Atención Diurna', 'lat' => 28.64116645, 'lng' => -17.78192483, 'url' => 'https://dependencialapalma.com/red-insular/mayores/centro-de-dia-de-brena-baja/', 'municipio' => 'brena-baja', 'area' => 2, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 2],
    ['nombre' => 'Centro de Día El Paso', 'descripcion' => 'Atención Diurna', 'lat' => 28.65277244, 'lng' => -17.88056996, 'url' => 'https://dependencialapalma.com/red-insular/mayores/centro-de-dia-de-el-paso/', 'municipio' => 'el-paso', 'area' => 1, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 0],
    ['nombre' => 'AFA La Palma', 'descripcion' => 'Asociación Alzheimer', 'lat' => 28.65839130, 'lng' => -17.90352780, 'url' => 'https://dependencialapalma.com/red-insular/mayores/asociacion-de-familiares-de-enfermos-de-alzheimer-afa-la-palma/', 'municipio' => 'los-llanos', 'area' => 1, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 2],
    ['nombre' => 'Centro Residencial Triana', 'descripcion' => 'Residencia Discapacidad', 'lat' => 28.65059708, 'lng' => -17.90929440, 'url' => 'https://dependencialapalma.com/red-insular/discapacidad/residencia-triana/', 'municipio' => 'los-llanos', 'area' => 2, 'tipo_area' => 1, 'requerimiento' => 4, 'perfil' => 0],
    ['nombre' => 'Centro de Día Triana', 'descripcion' => 'Atención Especializada', 'lat' => 28.65016620, 'lng' => -17.90903192, 'url' => 'https://dependencialapalma.com/red-insular/discapacidad/centro-de-dia-triana/', 'municipio' => 'los-llanos', 'area' => 2, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 2],
    ['nombre' => 'Centro Residencial Nina Jaubert (Discapacidad)', 'descripcion' => 'Residencia Discapacidad', 'lat' => 28.64460464, 'lng' => -17.78749567, 'url' => 'https://dependencialapalma.com/red-insular/discapacidad/residencia-nina-jaubert/', 'municipio' => 'brena-alta', 'area' => 2, 'tipo_area' => 1, 'requerimiento' => 3, 'perfil' => 7],
    ['nombre' => 'Residencia Villaflora', 'descripcion' => 'Rehabilitación Psicosocial', 'lat' => 28.65612464, 'lng' => -17.76796509, 'url' => 'https://dependencialapalma.com/red-insular/discapacidad/residencia-villaflora/', 'municipio' => 'brena-baja', 'area' => 2, 'tipo_area' => 1, 'requerimiento' => 0, 'perfil' => 9],
    ['nombre' => 'Hogar Funcional Mi Casa', 'descripcion' => 'Discapacidad', 'lat' => 28.66115176, 'lng' => -17.91168512, 'url' => 'https://dependencialapalma.com/red-insular/discapacidad/proyecto-mi-casa/', 'municipio' => 'los-llanos', 'area' => 2, 'tipo_area' => 3, 'requerimiento' => 4, 'perfil' => 0],
    ['nombre' => 'Centro ocupacional Garehagua', 'descripcion' => 'Discapacidad', 'lat' => 28.60493951, 'lng' => -17.77800525, 'url' => 'https://dependencialapalma.com/red-insular/discapacidad/centro-ocupacional-garehagua/', 'municipio' => 'mazo', 'area' => 2, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 2],
    ['nombre' => 'Centro ocupacional La Tisera', 'descripcion' => 'Discapacidad', 'lat' => 28.80476820, 'lng' => -17.77245570, 'url' => 'https://dependencialapalma.com/red-insular/discapacidad/centro-ocupacional-la-tisera/', 'municipio' => 'san-andres', 'area' => 2, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 2],
    ['nombre' => 'Centro ocupacional Noroeste-La Traviesa', 'descripcion' => 'Discapacidad', 'lat' => 28.76536310, 'lng' => -17.97836890, 'url' => 'https://dependencialapalma.com/red-insular/discapacidad/centro-ocupacional-la-traviesa/', 'municipio' => 'puntagorda', 'area' => 2, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 2],
    ['nombre' => 'Centro ocupacional Breña Alta', 'descripcion' => 'Discapacidad', 'lat' => 28.66257967, 'lng' => -17.78299055, 'url' => 'https://dependencialapalma.com/red-insular/discapacidad/centro-ocupacional-brena-alta/', 'municipio' => 'brena-alta', 'area' => 2, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 2],
    ['nombre' => 'Centro ocupacional Taburiente', 'descripcion' => 'Discapacidad', 'lat' => 28.66200824, 'lng' => -17.91206289, 'url' => 'https://dependencialapalma.com/red-insular/discapacidad/centro-ocupacional-taburiente/', 'municipio' => 'los-llanos', 'area' => 2, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 2],
    ['nombre' => 'Centro de Día NEP', 'descripcion' => 'Discapacidad', 'lat' => 28.58559414, 'lng' => -17.88353542, 'url' => 'https://dependencialapalma.com/red-insular/discapacidad/centro-de-dia-nep/', 'municipio' => 'los-llanos', 'area' => 2, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 2],
    ['nombre' => 'Centro de Día Dorador', 'descripcion' => 'Discapacidad', 'lat' => 28.70185720, 'lng' => -17.77271520, 'url' => 'https://dependencialapalma.com/red-insular/discapacidad/centro-de-dia-dorador/', 'municipio' => 'santa-cruz', 'area' => 2, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 2],
    ['nombre' => 'Centro de rehabilitación psicosocial Los Pedregales', 'descripcion' => 'Discapacidad', 'lat' => 28.66575592, 'lng' => -17.90976440, 'url' => 'https://dependencialapalma.com/red-insular/discapacidad/centro-de-rehabilitacion-psicosocial-los-pedregales/', 'municipio' => 'los-llanos', 'area' => 2, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 9],
    ['nombre' => 'Fundación Canaria Isonorte', 'descripcion' => 'Servicio de Autonomía Personal', 'lat' => 28.80530583, 'lng' => -17.77511368, 'url' => 'https://dependencialapalma.com/red-insular/mayores/servicio-de-promocion-de-la-autonomia-personal-para-personas-mayores-de-la-fundacion-canaria-isonorte/', 'municipio' => 'san-andres', 'area' => 2, 'tipo_area' => 2, 'requerimiento' => 0, 'perfil' => 9]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Insular - La Palma</title>
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css">

    <style>
        body { 
            margin: 0; 
            padding: 20px; 
            font-family: 'Segoe UI', sans-serif; 
            background-color: #f4f7f6; 
        }
        .container { 
            max-width: 1400px; 
            margin: auto; 
        }
        .titulo-principal { 
            text-align: center; 
            color: #2c3e50; 
            font-size: 20px; 
            margin: 0 0 15px 0; 
            font-weight: bold; 
        }
        .contenido-dinamico { 
            display: grid; 
            grid-template-columns: 380px 1fr; 
            gap: 15px; 
            height: calc(100vh - 100px); 
            min-height: 600px; 
        }
        .sidebar-izquierdo { 
            display: flex; 
            flex-direction: column; 
            gap: 15px; 
            height: 100%; 
            overflow: hidden; 
        }
        .filtros-container { 
            background: white; 
            padding: 18px; 
            border-radius: 12px; 
            box-shadow: 0 5px 20px rgba(0,0,0,0.05); 
            display: grid; 
            grid-template-columns: 1fr 1fr; 
            gap: 12px; 
        }
        .filtro-municipio-completo { 
            grid-column: 1 / -1; 
        }
        .logo-dependencia { 
            grid-column: 1 / -1; 
            max-width: 100%; 
            height: auto; 
            max-height: 80px; 
            margin: 0 auto 10px auto; 
            object-fit: contain; 
        }
        .campo-filtro { 
            display: flex; 
            flex-direction: column; 
            gap: 5px; 
        }
        label { 
            font-size: 11px; 
            color: #4a5568; 
            font-weight: 600; 
            text-transform: uppercase; 
            letter-spacing: 0.4px; 
        }
        select { 
            width: 100%; 
            padding: 8px 10px; 
            border-radius: 6px; 
            border: 1px solid #cbd5e1; 
            font-size: 13px; 
            background-color: #fff; 
            height: 38px; 
            box-sizing: border-box; 
            cursor: pointer; 
        }
        select option {
            padding: 8px;
        }
        .seccion-lista { 
            background: white; 
            border-radius: 12px; 
            box-shadow: 0 5px 20px rgba(0,0,0,0.05); 
            display: flex; 
            flex-direction: column; 
            overflow: hidden; 
            flex-grow: 1; 
        }
        .seccion-lista h2 { 
            font-size: 16px; 
            padding: 15px 15px 0 15px; 
            margin: 0; 
            color: #2c3e50; 
        }
        #lista-centros { 
            flex-grow: 1; 
            overflow-y: auto; 
            padding: 15px; 
        }
        .tarjeta-centro { 
            background: #fff; 
            border: 1px solid #e0e6ed; 
            border-radius: 8px; 
            padding: 15px; 
            margin-bottom: 15px; 
            transition: transform 0.2s, box-shadow 0.2s; 
        }
        .tarjeta-centro:hover { 
            transform: translateY(-2px); 
            box-shadow: 0 5px 15px rgba(0,0,0,0.08); 
            border-color: #cbd5e1; 
            cursor: pointer; 
        }
        .tarjeta-centro h3 { 
            margin: 0 0 8px 0; 
            font-size: 14px; 
            color: #2c3e50; 
        }
        .tarjeta-centro p { 
            margin: 0 0 10px 0; 
            font-size: 12px; 
            color: #64748b; 
            line-height: 1.4; 
        }
        .btn-enlace { 
            font-size: 12px; 
            color: #2563eb; 
            text-decoration: none; 
            font-weight: bold; 
        }
        #contenedor-mapa { 
            height: 100%; 
            width: 100%; 
            border-radius: 12px; 
            box-shadow: 0 5px 20px rgba(0,0,0,0.15); 
            border: 4px solid white; 
        }

        .img-icon-custom {
            width: 18px;
            height: 18px;
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            object-fit: contain;
        }

        @media (max-width: 900px) {
            .contenido-dinamico { 
                grid-template-columns: 1fr; 
                height: auto; 
            }
            .seccion-lista { height: 400px; }
            #contenedor-mapa { height: 450px; }
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="titulo-principal">Red Insular: Centros y Servicios para la Autonomía y Atención a la Dependencia</h1>

    <div class="contenido-dinamico">
        <div class="sidebar-izquierdo">
            <div class="filtros-container">
                <img src="dependencia.png" alt="Logo Dependencia" class="logo-dependencia">

                <div class="campo-filtro filtro-municipio-completo">
                    <label>Municipio:</label>
                    <select id="filtro-municipio" onchange="actualizarMapa()">
                        <option value="la-palma">Toda la Isla</option>
                        <option value="barlovento">Barlovento</option>
                        <option value="brena-alta">Breña Alta</option>
                        <option value="brena-baja">Breña Baja</option>
                        <option value="fuencaliente">Fuencaliente</option>
                        <option value="garafia">Garafía</option>
                        <option value="los-llanos">Los Llanos de Aridane</option>
                        <option value="el-paso">El Paso</option>
                        <option value="puntagorda">Puntagorda</option>
                        <option value="puntallana">Puntallana</option>
                        <option value="san-andres">San Andrés y Sauces</option>
                        <option value="santa-cruz">Santa Cruz de la Palma</option>
                        <option value="tazacorte">Tazacorte</option>
                        <option value="tijarafe">Tijarafe</option>
                        <option value="mazo">Villa de Mazo</option>
                    </select>
                </div>

                <div class="campo-filtro">
                    <label>Área:</label>
                    <select id="filtro-area" onchange="actualizarMapa()">
                        <option value="0">Cualquiera</option>
                        <?php foreach($plazas_areas as $key => $val) echo "<option value='$key'>$val</option>"; ?>
                    </select>
                </div>

                <div class="campo-filtro">
                    <label>Tipo:</label>
                    <select id="filtro-tipo_area" onchange="actualizarMapa()">
                        <option value="0">Cualquiera</option>
                        <?php foreach($plazas_tipos as $key => $val) echo "<option value='$key'>$val</option>"; ?>
                    </select>
                </div>

                <div class="campo-filtro">
                    <label>Requerimiento:</label>
                    <select id="filtro-requerimiento" onchange="actualizarMapa()">
                        <option value="0">Cualquiera</option>
                        <?php foreach($plazas_requerimientos as $key => $val) echo "<option value='$key'>$val</option>"; ?>
                    </select>
                </div>

                <div class="campo-filtro">
                    <label>Perfil:</label>
                    <select id="filtro-perfil" onchange="actualizarMapa()">
                        <option value="0">Cualquiera</option>
                        <?php foreach($plazas_perfiles as $key => $val) echo "<option value='$key'>$val</option>"; ?>
                    </select>
                </div>
            </div>

            <div class="seccion-lista">
                <h2>Centros Sociosanitarios</h2>
                <div id="lista-centros"></div>
            </div>
        </div>

        <div id="contenedor-mapa"></div>
    </div>
</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>

<script>
    const centrosArray = <?php echo json_encode($centros_lista); ?>;

    var mapaCalles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { attribution: '&copy; OpenStreetMap' });
    var mapaSatelite = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', { attribution: 'Tiles &copy; Esri' });

    var map = L.map('contenedor-mapa', {
        center: [28.66, -17.86],
        zoom: 11,
        layers: [mapaCalles]
    });

    L.control.layers({ "Mapa de Calles": mapaCalles, "Vista Satélite": mapaSatelite }).addTo(map);

    const municipiosCoordenadas = {
        "la-palma": { lat: 28.66, lng: -17.86, zoom: 11 },
        "barlovento": { lat: 28.8272, lng: -17.8038, zoom: 14 },
        "brena-alta": { lat: 28.6622, lng: -17.7885, zoom: 14 },
        "brena-baja": { lat: 28.6475, lng: -17.7845, zoom: 13 },
        "fuencaliente": { lat: 28.5020, lng: -17.8636, zoom: 14 },
        "garafia": { lat: 28.8291, lng: -17.9463, zoom: 13 },
        "los-llanos": { lat: 28.6585, lng: -17.9182, zoom: 15 },
        "el-paso": { lat: 28.6521, lng: -17.8814, zoom: 14 },
        "puntagorda": { lat: 28.7744, lng: -17.9787, zoom: 14 },
        "puntallana": { lat: 28.7397, lng: -17.7457, zoom: 14 },
        "san-andres": { lat: 28.8048, lng: -17.7749, zoom: 14 },
        "santa-cruz": { lat: 28.6965, lng: -17.7699, zoom: 15 },
        "tazacorte": { lat: 28.6447, lng: -17.9340, zoom: 15 },
        "tijarafe": { lat: 28.7104, lng: -17.9563, zoom: 14 },
        "mazo": { lat: 28.6044, lng: -17.7797, zoom: 13 }
    };

    var todosLosMarcadores = [];

    function inicializarMarcadores() {
        centrosArray.forEach(function(centro) {
            let color = (centro.area === 1) ? 'green' : 'blue';
            let iconConfig = L.AwesomeMarkers.icon({
                icon: 'fa-cog',
                markerColor: color,
                prefix: 'fa'
            });

            let marker = L.marker([centro.lat, centro.lng], {icon: iconConfig});

            marker.on('add', function() {
                let markerElement = this.getElement();
                if (markerElement) {
                    let iconHtml = markerElement.querySelector('i');
                    if (iconHtml) {
                        iconHtml.className = ''; 
                        iconHtml.innerHTML = '<img src="icon.ico" class="img-icon-custom" alt="icon">';
                    }
                }
            });

            marker.bindTooltip(`<b>${centro.nombre}</b>`, {
                permanent: false,
                direction: 'top',
                opacity: 0.9
            });

            marker.on('click', function() {
                if (centro.url) window.open(centro.url, '_blank');
            });

            todosLosMarcadores.push({ marker: marker, ...centro });
        });
    }

    function actualizarMapa() {
        const munCod = document.getElementById("filtro-municipio").value;
        const selArea = parseInt(document.getElementById("filtro-area").value);
        const selTipo = parseInt(document.getElementById("filtro-tipo_area").value);
        const selReq = parseInt(document.getElementById("filtro-requerimiento").value);
        const selPerf = parseInt(document.getElementById("filtro-perfil").value);

        const m = municipiosCoordenadas[munCod];
        map.flyTo([m.lat, m.lng], m.zoom);

        const contenedorLista = document.getElementById('lista-centros');
        contenedorLista.innerHTML = '';
        let totalListados = 0;

        todosLosMarcadores.forEach(function(item) {
            let matchMun = (munCod === 'la-palma' || item.municipio === munCod);
            let matchArea = (selArea === 0 || item.area === selArea);
            let matchTipo = (selTipo === 0 || item.tipo_area === selTipo);
            let matchReq = (selReq === 0 || item.requerimiento === selReq);
            let matchPerf = (selPerf === 0 || item.perfil === selPerf);

            if (matchMun && matchArea && matchTipo && matchReq && matchPerf) {
                map.addLayer(item.marker);
                totalListados++;

                contenedorLista.innerHTML += `
                    <div class="tarjeta-centro" onclick="hacerFocoMapa(${item.lat}, ${item.lng})">
                        <h3>${item.nombre}</h3>
                        <p>${item.descripcion}</p>
                        ${item.url ? `<a href="${item.url}" target="_blank" class="btn-enlace">Visitar web oficial</a>` : ''}
                    </div>
                `;
            } else {
                map.removeLayer(item.marker);
            }
        });

        if (totalListados === 0) {
            contenedorLista.innerHTML = `<div class="sin-resultados">No se encontraron centros con los criterios seleccionados.</div>`;
        }
    }

    function hacerFocoMapa(lat, lng) {
        map.flyTo([lat, lng], 16);
    }

    inicializarMarcadores();
    actualizarMapa();
</script>

</body>
</html>
