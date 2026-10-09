<?php include 'header.php'; ?>

<form action="procesar.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="card">
            <h2>Datos personales 🙍‍♂️🙍‍♀️</h2>
            <div class="form-group">
                <label for="nombre">Nombre y apellidos:</label>
                <input type="text" id="nombre" name="nombre" required placeholder="Ej. Ángel Livia García">
            </div>

            <div class="form-group">
                <label for="correo">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" required placeholder="Ej. ejemplo@ejemplo.com">
            </div>

            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" required placeholder="Ej. 20">
            </div>
        </div>

        <div class="card">
            <h2>Configuración del pase ⚙️</h2>

            <div class="form-group">
                <label>Tipo de entrada:</label>
                <div class="checkbox-group">
                    <label><input type="radio" name="tipo_entrada" value="General" checked> General (50 €)</label>
                    <label><input type="radio" name="tipo_entrada" value="VIP"> VIP(120 €)</label>
                    <label><input type="radio" name="tipo_entrada" value="Super VIP"> SuperVIP(180 €)</label>
                </div>
            </div>

            <div class="form-group">
                <label>Días de asistencia (+10 € por día):</label>
                <div class="checkbox-group">
                    <label><input type="checkbox" name="dias[]" value="Viernes"> Viernes (+10 €)</label>
                    <label><input type="checkbox" name="dias[]" value="Sábado"> Sábado (+10 €)</label>
                    <label><input type="checkbox" name="dias[]" value="Domingo"> Domingo (+10 €)</label>
                </div>
            </div>

            <div class="form-group">
                <label for="metodo_pago">Método de pago:</label>
                <select id="metodo_pago" name="metodo_pago" required>
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="Tarjeta de crédito">Tarjeta de crédito</option>
                    <option value="Bizum">Bizum</option>
                    <option value="PayPal">PayPal</option>
                </select>
            </div>

            <div class="form-group">
                <label for="foto">Foto del asistente:</label>
                <input type="file" id="foto" name="foto" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="observaciones">Observaciones:</label>
                <textarea id="observaciones" name="observaciones" rows="3" placeholder="Peticiones especiales..."></textarea>
            </div>

            <button type="submit" class="btn">Generar Acreditación</button>
        </div>
    </div>
</form>

</body>
</html>