<div class="page-header">
    <h1 class="text-titles"><i class="zmdi zmdi-store zmdi-hc-fw"></i> Bienvenido a <small><?php echo COMPANY; ?></small></h1>
</div>

<!-- Menú sin imagen con botones celestes -->
<div class="full-box" style="margin-bottom: 20px;">
    <div class="menu-grid">
        <a href="<?php echo SERVERURL; ?>views/contents/letras.php">
            <div class="menu-item">
                <img src="<?php echo SERVERURL; ?>views/assets/img/Abecedario.png" alt="Abecedario">
                <h3>ABECEDARIO</h3>
            </div>
        </a>
		
        <a href="<?php echo SERVERURL; ?>views/contents/numeros.php">
   			 <div class="menu-item">
       			 <img src="<?php echo SERVERURL; ?>views/assets/img/numeros.png"" alt="numeros">
        		<h3>NUMEROS</h3>
    		</div>
		</a>

        <a href="<?php echo SERVERURL; ?>views/contents/colores.php">
            <div class="menu-item">
                <img src="<?php echo SERVERURL; ?>views/assets/img/colores.png"" alt="Colores">
                <h3>COLORES</h3>
            </div>
        </a>
        <a href="<?php echo SERVERURL; ?>views/contents/frutas.php">
            <div class="menu-item">
                <img src="<?php echo SERVERURL; ?>views/assets/img/frutas.png" alt="frutas">
                <h3>FRUTAS</h3>
            </div>
        </a>
        <a href="<?php echo SERVERURL; ?>views/contents/verduras.php">
            <div class="menu-item">
                <img src="<?php echo SERVERURL; ?>views/assets/img/verdura.png" alt="verduras">
                <h3>VERDURAS</h3>
            </div>
        </a>
        <a href="<?php echo SERVERURL; ?>views/contents/meses.php">
            <div class="menu-item">
                <img src="<?php echo SERVERURL; ?>views/assets/img/mesesdelaño.png" alt="Meses del Año">
                <h3>MESES DEL AÑO</h3>
            </div>
        </a>
        <a href="<?php echo SERVERURL; ?>views/contents/nombres.php">
            <div class="menu-item">
                <img src="<?php echo SERVERURL; ?>views/assets/img/nombre.png" alt="nombres">
                <h3>NOMBRES</h3>
            </div>
        </a>
        
        <a href="<?php echo SERVERURL; ?>views/contents/saludos.php">
            <div class="menu-item">
                <img src="<?php echo SERVERURL; ?>views/assets/img/saludos.png" alt="Saludos Cordiales">
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
