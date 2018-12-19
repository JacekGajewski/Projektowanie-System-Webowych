using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;



namespace PSWebASP
{

    public partial class newsletter : System.Web.UI.Page
    {
        protected void ukrPol_Click(object sender, EventArgs a)
        {
            Label1.Text = IsPostBack.ToString();
            UkrytePola.Visible = true;
        }

        protected void Page_Load(object sender2, EventArgs e)
        {
            string zmienna;
            Label1.Text = IsPostBack.ToString();

            if (IsPostBack)
            {
                Zawartosc.Visible = true;
                zmienna = " " + txtName.Text + " " + txtSName.Text;
                NaSer.Text = zmienna;
                zmienna = " " + age.Text;
                Wie.Text = zmienna;
                zmienna = " " + email.Text;
                AdrEm.Text = zmienna;
            }
          
        }
    }
}