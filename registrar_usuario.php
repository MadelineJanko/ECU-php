<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO DE SESIÓN</title>
</head>
<body>
    <main>
    <div class="bg-white dark:bg-gray-900">
        <div class="flex justify-center h-screen">
            <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url(https://c1.wallpaperflare.com/preview/894/387/819/engine-car-car-engine-motor.jpg)">
                <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                    <div>
                        <h2 style="font-size: 40px;" class="text-4xl font-bold text-white">BIENVENIDO A TU DIAGNOSTICO PERSONAL</h2>
                        
                        <p style="font-size: 20px;" class="max-w-xl mt-3 text-gray-200">Con este programa podrás realizar un diagnostico básico con un porcentaje de exactitud el cual te permitira tener una mejor interpretación que te ayudara a llegar a una solución para el control y mantenimiento de tu vehículo</p>
                        <br><br><br><br><br><br><br><br><br><br><br>
                        <div style="color: white;">&copy; Copyright Leonardo Mamani Balvin</div> <br>
                        <a style="padding: 10px;
    color: white;
    background-color: #25316D;
    text-decoration: none;
    font-weight: 400;
    text-transform: uppercase;
    font-size: 12px;
    border-radius: 12px;
    box-shadow: 0 8px 32px rgba(31,222,130,0.233);
                        " href="index.php">Volver a la página principal</a>                        
                    </div>
                </div>
            </div>
            
            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                <div class="flex-1">
                    <div class="text-center">
                        <h2 class="text-4xl font-bold text-center text-gray-700 dark:text-white">CREA UNA NUEVA CUENTA</h2>
                        
                        <p class="mt-3 text-gray-500 dark:text-gray-300">Registrate para acceder a la plataforma</p>
                    </div>

                    <div class="mt-3">
                        <form class="form" method="post" action="register_usuario.php">
                            <div>
                                <label for="ci" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Cédula de Identidad</label>
                                <input type="number" required autocomplete="off" id="ci" name="ci" class="block w-full px-2 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                            </div>
                 
                                <div>
                                <label for="nombre" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Nombres</label>
                                <input type="text" required autocomplete="off" id="nombre" name="nombre" class="block w-full px-2 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                                </div>

                                <div>
                                <label for="apellidos" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Apellidos</label>
                                <input type="text" required autocomplete="off" id="apellidos" name="apellidos" class="block w-full px-2 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                                </div>
                                <div>
                                <label for="direccion" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Direccion</label>
                                <input type="text" required autocomplete="off" id="direccion" name="direccion" class="block w-full px-2 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                                </div>
                                <div>
                                <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email</label>
                                <input type="text" required autocomplete="off" id="email" name="email" class="block w-full px-2 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                                </div>
                                <div>
                                <label for="pass" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Contraseña</label>
                                <input type="text" required autocomplete="off" id="pass" name="pass" class="block w-full px-2 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                                </div>
                            <div class="mt-3">
                                <button
                                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                    Crear cuenta
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
</body>
<script src="https://cdn.tailwindcss.com"></script>
</html>