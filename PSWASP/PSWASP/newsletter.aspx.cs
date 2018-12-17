using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace PSWASP
{
    public partial class newsletter : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
                if (IsPostBack)
                {
                    string a = "Imię: " + txtName.Text + " Nazwisko: " + txtSName.Text + " Wiek: " + age.Text + " Adres Email: " + email.Text;
                    Zawartosc.Text = a;
                }
        }

        protected void ukrPol_Click(object sender, EventArgs e)
        {

        }
    }
}