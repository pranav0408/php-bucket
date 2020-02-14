<?php

// it takes 6 parameters.
// any amount of time can be given.
// below is name,value,time of life


// for destroying just minus the time of life of the cookie for which it was set
setcookie("zeus","lorem ipsum",time() - 1*60);

?>