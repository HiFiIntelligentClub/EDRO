# Reality
Reality - Объект, содержащий описание реальности. События происходящие во время узловых измерений реального времени и параметров реального времени в течении движения по процессу. <br/>
Объект состоит из свойств - семафороов (СЕМА4) и методов. <br/>
Пример объекта <br/><br/>

objReality->bIzLoading <br/>
objReality->bIzPlaying <br/>
objReality->bIzStopped <br/>
objReality->bIzHuman <br/>
objReality->bIzAutomatic <br/>
objReality->bIzNeedToDoSomething (Trigger)<br/>
objReality->_DropAutomatic();
objReality
construct()
:bIzHuman
::bIzLoading
-
-
-
::bIzPlaying
-
-
-
::bIzStopped
:bIzAutomatic
-
-
::bIzLoading
-
-
::bIzPlaying

end;
