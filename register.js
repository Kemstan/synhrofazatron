 
var start1 = 0; var start2 = 0; var start3 = 0; var start4 = 0; var start5 = 0;
var cnt1 = 0; var cnt2 = 0; var cnt3 = 0; var cnt4 = 0; var cnt5 = 0;
var many1 = 0; var many2 = 0; var many3 = 0; var many4 = 0; var many5 = 0;
var mony1 = 0; var mony2 = 0; var mony3 = 0; var mony4 = 0; var mony5 = 0;
var PreviousDownTimeX1 = 0; var PreviousDownTimeX2 = 0; var PreviousDownTimeX3 = 0; var PreviousDownTimeX4 = 0; var PreviousDownTimeX5 = 0;
///////////////////////////////11111111111

function down1()
{
if (!PreviousDownTimeX1) PreviousDownTimeX1 = new Date ().getTime (); else
   {
   var CurrentDownTimeX = new Date ().getTime ();
   var delta = CurrentDownTimeX - PreviousDownTimeX1;

   if (many1<13) { document.getElementById("delta_key1").value += delta +","; } 
   many1++;
   PreviousDownTimeX1 = CurrentDownTimeX;
   }
}
function processKeyDown1(e) {
    down1();
    if (!start1) {
        start1 = (new Date()).getTime();
    }
    ++cnt1;
    
}

function processKeyUp1(e) {
    var delta = (new Date()).getTime() - start1;
    
	start1 = 0;
    cnt1 = 0;

    if (mony1<14) { document.getElementById("push_key1").value += delta +","; } 
	mony1++;
	}

//////////////////22222222222222222222

function down2()
{
if (!PreviousDownTimeX2) PreviousDownTimeX2 = new Date ().getTime (); else
   {
   var CurrentDownTimeX = new Date ().getTime ();
   var delta = CurrentDownTimeX - PreviousDownTimeX2;

   if (many2<13) { document.getElementById("delta_key2").value += delta +","; } 
   many2++;
   PreviousDownTimeX2 = CurrentDownTimeX;
   }
}
function processKeyDown2(e) {
    down2();
    if (!start2) {
        start2 = (new Date()).getTime();
    }
    ++cnt2;
    
}

function processKeyUp2(e) {
    var delta = (new Date()).getTime() - start2;
    
	start2 = 0;
    cnt2 = 0;

if (mony2<14) { document.getElementById("push_key2").value += delta +","; } 
mony2++;
	}

//////////////////////////333333

function down3()
{
if (!PreviousDownTimeX3) PreviousDownTimeX3 = new Date ().getTime (); else
   {
   var CurrentDownTimeX = new Date ().getTime ();
   var delta = CurrentDownTimeX - PreviousDownTimeX3;

   if (many3<13) { document.getElementById("delta_key3").value += delta +","; } 
   many3++;
   PreviousDownTimeX3 = CurrentDownTimeX;
   }
}
function processKeyDown3(e) {
    down3();
    if (!start3) {
        start3 = (new Date()).getTime();
    }
    ++cnt3;
    
}

function processKeyUp3(e) {
    var delta = (new Date()).getTime() - start3;
    
	start3 = 0;
    cnt3 = 0;

if (mony3<14) { document.getElementById("push_key3").value += delta +","; } 
mony3++;
	}

//////////////////////////////44444

function down4()
{
if (!PreviousDownTimeX4) PreviousDownTimeX4 = new Date ().getTime (); else
   {
   var CurrentDownTimeX = new Date ().getTime ();
   var delta = CurrentDownTimeX - PreviousDownTimeX4;

   if (many4<13) { document.getElementById("delta_key4").value += delta +","; } 
   many4++;
   PreviousDownTimeX4 = CurrentDownTimeX;
   }
}
function processKeyDown4(e) {
    down4();
    if (!start4) {
        start4 = (new Date()).getTime();
    }
    ++cnt4;
    
}

function processKeyUp4(e) {
    var delta = (new Date()).getTime() - start4;
    
	start4 = 0;
    cnt4 = 0;

if (mony4<14) { document.getElementById("push_key4").value += delta +","; } 
mony4++;
	}

///////////////////////55555555
function down5()
{
if (!PreviousDownTimeX5) PreviousDownTimeX5 = new Date ().getTime (); else
   {
   var CurrentDownTimeX = new Date ().getTime ();
   var delta = CurrentDownTimeX - PreviousDownTimeX5;

   if (many5<13) { document.getElementById("delta_key5").value += delta +","; } 
   many5++;
   PreviousDownTimeX5 = CurrentDownTimeX;
   }
}
function processKeyDown5(e) {
    down5();
    if (!start5) {
        start5 = (new Date()).getTime();
    }
    ++cnt5;
    
}

function processKeyUp5(e) {
    var delta = (new Date()).getTime() - start5;
    
	start5 = 0;
    cnt5 = 0;

if (mony5<14) { document.getElementById("push_key5").value += delta +","; } 
mony5++;
	}
