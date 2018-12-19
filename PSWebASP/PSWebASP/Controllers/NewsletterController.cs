using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace PSWASP.Controllers
{
    public class NewsletterController : Controller
    {
        // GET: Newsletter
        public ActionResult Newsletter()
        {
            return View();
        }
    }
}