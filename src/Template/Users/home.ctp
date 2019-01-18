<h2>Bienvenido <?=$this->Html->link($current_user['nombre'] .' '. $current_user['apellido'],['controller'=>'Users','action'=>'view',$current_user['id']])?></h2>
