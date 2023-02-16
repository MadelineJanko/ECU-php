<?php
                include("../conexion.php");
                $id=$_GET['id'];
                $query="SELECT * FROM p WHERE id='$id'";
                $resultado=$conex->query($query);
                while($row = $resultado->fetch_assoc()){
                ?>
                    <?php echo "<article>"; ?>
                    <?php echo "<header>"; ?>
                    <?php echo "<p style='color: white; font-size:20px;'>Código:</p>"; ?>
                    <?php echo "<p style='color: white; font-size:20px;'>"; ?>
                    <?php echo $row['codigo']; ?><br/>
                    <?php echo "</p>"; ?><br/>

                    <?php echo "<p style='color: white; font-size:20px;'>Descripción:</p>"; ?>
                    <?php echo "<p style='color: white; font-size:20px;'>"; ?>
                    <?php echo $row['descripcion']; ?><br/>
                    <?php echo "</p>"; ?><br/>
                    
                    <?php echo "</header>"; ?>
                    <?php echo "<section>"; ?>
                    <?php echo "<p style='color: white; font-size:20px;'>Detalles:</p>"; ?>
                    <?php echo "<p style='color: white; font-size:20px;'>"; ?>
                    <?php echo $row['detalle']; ?><br/>
                    <?php echo "</p>"; ?><br/>
                    <?php echo "</section>"; ?>                   
                    <?php echo "</article>"; ?>
                <?php
                 }
                ?>