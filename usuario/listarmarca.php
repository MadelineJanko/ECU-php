<?php
                include("../conexion.php");

                $query="SELECT * FROM marca";
                $resultado=$conex->query($query);
                while($row = $resultado->fetch_assoc()){
                ?>
                    <?php echo "<article>"; ?>
                    <?php echo "<header>"; ?>
                    <?php echo $row['nombre_marca']; ?><br/>
                    <?php echo "</header>"; ?>
                    <div class="lima">
                    <img style="filter: drop-shadow(0 0 7px rgb(2, 2, 27))" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/><br/></div>
                    <?php echo "<section>"; ?>
                    <div class="entrar">
                    <a href=<?php echo 'elegir_marca.php?id='.$row['id']; ?> style="font-size:18px;" class="badge badge-primary">ENTRAR</a>
                    </div>
                    <?php echo "</section>"; ?>                   
                    <?php echo "</article>"; ?>
                <?php
                 }
                ?>