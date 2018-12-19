<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="newsletter.aspx.cs" Inherits="PSWebASP.newsletter" %>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
      <link rel="stylesheet" href="~/Content/newsletter.css" type="text/css" />


</head>
<body>

    <form id="form1" runat="server" action = "newsletter.aspx">
        <div class="containerr">

            Imie:<br />
            <asp:TextBox runat="server" id="txtName" />
            <asp:RequiredFieldValidator runat="server" 
                id="reqName" 
                controltovalidate="txtName" 
                errormessage="To pole nie może być puste" /><br />
            <br />
            Nazwisko :<br />
            <asp:TextBox runat="server" id="txtSName" />
            <asp:RequiredFieldValidator runat="server" 
                id="reqName2" 
                controltovalidate="txtSName" 
                errormessage="To pole nie może być puste" /><br />
            <br />
            Wiek:<br />
           <asp:TextBox id="age" runat="server"/>
           <asp:RequiredFieldValidator runat="server" 
                id="reqAge" 
                controltovalidate="age" 
                errormessage="To pole nie może być puste" /><br />
           <asp:RangeValidator id="ran"
              ControlToValidate="age"
              MinimumValue="0"
              MaximumValue="120"
              Type="Integer"
              Text="Nie możesz mnieć mniej niż 0 lat i więcej niż 120"
              runat="server"/>

            <br />

              Email:<br />
            <asp:TextBox runat="server" id="email" />
            <asp:RequiredFieldValidator runat="server" 
                id="RequiredFieldValidator1" 
                controltovalidate="email" 
                errormessage="To pole nie może być puste" /><br />
            <asp:RegularExpressionValidator id="regExpr" 
                     ControlToValidate="email"
                     ValidationExpression="\w+@\w+.\w+"
                     ErrorMessage="Proszę podać poprawny adres email"
                     runat="server"/><br />

             <asp:Label ID="UkrytePola"
                Text="Adres:"
                runat="server"
                Visible = "false">
                 Ulica:<br />
                <asp:TextBox ID="Ulica" runat="server" />
                 <br />
                Miasto:<br />
                <asp:TextBox ID="Miasto" runat="server" />
            </asp:Label>

             <aside style=" font-size:10pt;   width:30em">Administratorem twoich danych osobowych jest Ksiazkowo. <br>Dane będą przetwarzane w celu wysyłki newslettera, na zasadach określonych w regulaminie.</aside> <br>


             <asp:Button id="ukrPol" 
                 Text="Ukryte pole" 
                 runat="server" 
                 OnClick="ukrPol_Click"/>
            
            <asp:Button id="pl"
                runat="server"
                Text="Prześlij dane"
                OnClick="Page_Load" />

             <asp:Label id="Zawartosc" 
                 Visible = "false"
                 runat="server">
                  <br />
                 Imie i Nazwiko 
                 <asp:Label id="NaSer" 
                     Text=""
                    runat="server"/><br />
                 Wiek
                  <asp:Label id="Wie" 
                     Text=""
                    runat="server"/><br />
                 Adres Email
                    <asp:Label id="AdrEm" 
                     Text=""
                    runat="server"/><br />


             </asp:Label>
          

                <asp:Label id="Label1" 
                     Text=""
                    runat="server"/><br />

           
           <button> <a href="Newsletter/Newsletter">Powrót</a></button>
            
 
        </div>

    </form>
   
</body>
</html>
