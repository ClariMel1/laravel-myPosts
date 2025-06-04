## Instalación

Sigue estos pasos para instalar y ejecutar este proyecto Laravel:

1. **Clona el repositorio:**
   ```bash
   git clone https://github.com/tu-usuario/laravel-myPosts.git
   cd laravel-myPosts
   ```

2. **Instala las dependencias de PHP:**
   ```bash
   composer install
   ```

3. **Copia el archivo de entorno y genera la clave de la aplicación:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configura la base de datos**  
   Edita el archivo `.env` y ajusta las variables `DB_DATABASE`, `DB_USERNAME`, y `DB_PASSWORD` según tu entorno.

5. **Ejecuta las migraciones:**
   ```bash
   php artisan migrate
   ```

6. **Instala las dependencias de Node.js y compila los assets (opcional):**
   ```bash
   npm install
   npm run build
   ```

7. **Inicia el servidor de desarrollo:**
   ```bash
   composer run dev
   ```

Accede a la aplicación en [http://localhost:8000](http://localhost:8000).
