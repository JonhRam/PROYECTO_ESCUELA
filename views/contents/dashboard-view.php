<div class="page-header">
    <h1 class="text-titles"><i class="zmdi zmdi-store zmdi-hc-fw"></i> Bienvenido a <small><?php echo COMPANY; ?></small></h1>
</div>

<!-- Menú sin imagen con botones celestes -->
<div class="full-box" style="margin-bottom: 20px;">
    <div class="menu-grid">
        <a href="<?php echo SERVERURL; ?>abecedario.php">
            <div class="menu-item">
                <img src="<?php echo SERVERURL; ?>views/assets/icons/img/abc.jpg" alt="Abecedario">
                <h3>ABECEDARIO</h3>
            </div>
        </a>
		
        <a href="<?php echo SERVERURL; ?>views/animales.php">
   			 <div class="menu-item">
       			 <img src="<?php echo SERVERURL; ?>views/assets/icons/img/animals.jpg" alt="Animales">
        		<h3>ANIMALES</h3>
    		</div>
		</a>

        <a href="<?php echo SERVERURL; ?>colores.php">
            <div class="menu-item">
                <img src="<?php echo SERVERURL; ?>views/assets/icons/img/colors.png" alt="Colores">
                <h3>COLORES</h3>
            </div>
        </a>
        <a href="<?php echo SERVERURL; ?>comida.php">
            <div class="menu-item">
                <img src="<?php echo SERVERURL; ?>views/assets/icons/img/food.png" alt="Comida">
                <h3>COMIDA</h3>
            </div>
        </a>
        <a href="<?php echo SERVERURL; ?>dias_semana.php">
            <div class="menu-item">
                <img src="<?php echo SERVERURL; ?>views/assets/icons/img/days.png" alt="Días de la Semana">
                <h3>DÍAS DE LA SEMANA</h3>
            </div>
        </a>
        <a href="<?php echo SERVERURL; ?>meses_ano.php">
            <div class="menu-item">
                <img src="<?php echo SERVERURL; ?>views/assets/icons/img/months.png" alt="Meses del Año">
                <h3>MESES DEL AÑO</h3>
            </div>
        </a>
        <a href="<?php echo SERVERURL; ?>personas.php">
            <div class="menu-item">
                <img src="<?php echo SERVERURL; ?>views/assets/icons/img/people.png" alt="Personas">
                <h3>PERSONAS</h3>
            </div>
        </a>
        <a href="<?php echo SERVERURL; ?>preguntas.php">
            <div class="menu-item">
                <img src="<?php echo SERVERURL; ?>views/assets/icons/img/questions.png" alt="Preguntas">
                <h3>PREGUNTAS</h3>
            </div>
        </a>
        <a href="<?php echo SERVERURL; ?>pronombres.php">
            <div class="menu-item">
                <img src="<?php echo SERVERURL; ?>views/assets/icons/img/pronouns.png" alt="Pronombres">
                <h3>PRONOMBRES</h3>
            </div>
        </a>
        <a href="<?php echo SERVERURL; ?>saludos_cordiales.php">
            <div class="menu-item">
                <img src="<?php echo SERVERURL; ?>views/assets/icons/img/greetings.png" alt="Saludos Cordiales">
                <h3>SALUDOS CORDIALES</h3>
            </div>
        </a>
    </div>
</div>

<!-- Estilos CSS con botones celestes -->
<style>
    .menu-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        text-align: center;
    }

    .menu-item {
        background-color: #00BCD4; /* Color celeste */
        color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        transition: transform 0.3s;
    }

    .menu-item:hover {
        transform: scale(1.05);
    }

    .menu-item img {
        width: 50px;
        height: 50px;
        margin-bottom: 10px;
    }

    .menu-item h3 {
        margin: 0;
        font-size: 18px;
    }
</style>
