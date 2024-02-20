<?php
    require_once("c://xampp/htdocs/login/view/head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:login.php");
    }
?>
    
    <body>
   
    
    <div id="dashboard-container">
        <aside id="dashboard">
            <h2>REFORESTACIÓN</h2>
            <ul>
                <li><a href="#" id="zonas-link">HUANCAYO</a></li>
                <!-- Puedes agregar más elementos de menú si es necesario -->
            </ul>

            <section id="zonas-section" style="display:none;">
                <h2>Zonas</h2>
                <ul class="zonas-list" id="zonas-list">
                    <!-- Las zonas se agregarán dinámicamente mediante JavaScript -->
                </ul>
                
            </section>
        </aside>
        <aside>
            <section id="importancia-reforestacion">
                <h3>Importancia de la Reforestación</h3>
                <p>
                    La reforestación desempeña un papel crucial en la preservación del medio ambiente.
                    Al plantar árboles, contribuimos a la captura de carbono, la conservación del suelo,
                    la mejora de la calidad del aire y la promoción de la biodiversidad.
                </p>
        
                <p>
                    Además, la reforestación ayuda a prevenir la erosión del suelo, protege los recursos hídricos, 
                    proporciona hábitats para la vida silvestre y promueve la sostenibilidad a largo plazo.
                </p>
        
                <img src="/login/asset/img/reforestacion.jpg" alt="Importancia de la Reforestación">
            </section>
        
        </aside>
    </div>
    
    <script src="/login/asset/js/dashboard.js"></script>
</body>
    
    
<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>