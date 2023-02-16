<?php
                include("../conexion.php");
                $id=$_GET['id'];
                $query="SELECT * FROM modelo WHERE id_marca='$id'";
                $resultado=$conex->query($query);
                while($row = $resultado->fetch_assoc()){
                ?>
                    <?php echo "<article>"; ?>
                    <?php echo "<header>"; ?>
                    <?php echo $row['nombre']; ?><br/>
                    <?php echo "</header>"; ?>
                    <div class="lima">
                    <img style="filter: drop-shadow(0 0 7px rgb(2, 2, 27))" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/><br/></div>
                    <?php echo "<section>"; ?>
                    <div class="entrar">
                    <form class="form" method="post" action="principal.php?id=<?php echo $row['id']; ?>">
                            <div>
                                <button style="font-size:16px; padding:0px 5px;">
                                   <b>ENTRAR</b> 
                                </button>
                            </div>
                        </form>
                    </div>
                    <?php echo "</section>"; ?>                   
                    <?php echo "</article>"; ?>
                <?php
                 }
                ?>