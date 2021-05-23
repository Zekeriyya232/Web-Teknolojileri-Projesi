function formKontrol(frm)
{
    var isim = frm.isim.value;
    var soyisim = frm.soyisim.value;
    var email = frm.email.value;
    var mailchck=email.indexOf("@");
    var dotpos=email.lastIndexOf(".");
    var telefon = frm.telefon.value;
   

    if ( isim==null || isim=="" )
    {
        alert("İsim boş bırakılamaz!");
        return false;
    }
    if ( soyisim == null || soyisim == "" )
    {
        alert("Soyisim boş bırakılamaz!");
        return false;
    }
    if ( mailchck<1 || dotpos<mailchck+2 || dotpos+2>=email.length )
    {
        alert("Geçerli email adresi girin<br>Örnek  ####@hotmail.com");
        return false;
    }      
    
    if ( telefon==null || telefon=="" )
    {
        alert("Telefon numarası boş bırakılamaz");
        return false;
    }
    
    return true;
}