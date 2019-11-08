<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/all_gone/templates/layout/page.html.twig */
class __TwigTemplate_4ac31a99e89a4f8a2c034ee785b026974ab16d870b999936a26748bde58b9754 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 71];
        $filters = ["escape" => 50];
        $functions = ["url" => 88];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 45
        echo "<div class=\"page-wrapper\">

  <header class=\"fixed-top\">
  <nav class=\"navbar navbar-expand-lg\">
        <div class=\"container\">
    ";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
    </div>
    </nav>
  </header>

  ";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
  ";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
        echo "

  ";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "

  ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "

  ";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 66
        echo "
    <div class=\"layout-content\">
      ";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
    </div>";
        // line 70
        echo "
    ";
        // line 71
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 72
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 73
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 76
        echo "
    ";
        // line 77
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 78
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 82
        echo "
  </main>

  <footer>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4 col-lg-3 f-logo\"><a href=\"index.html\"><img src=\"";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "themes/custom/all_gone/img/logo.png\" alt=\"\" width=\"262\" height=\"62\" class=\"img-fluid\"></a></div>
          <div class=\"col-md-8 col-lg-9 d-flex align-items-center justify-content-end\">
            <div class=\"menu-footer-menu-container\">
                ";
        // line 91
        if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
            // line 92
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo "
  ";
        }
        // line 94
        echo "            </div>
          </div>
        </div>
        ";
        // line 97
        if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
            // line 98
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo "
  ";
        }
        // line 100
        echo "      </div>
    </footer>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/all_gone/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 100,  160 => 98,  158 => 97,  153 => 94,  147 => 92,  145 => 91,  139 => 88,  131 => 82,  125 => 79,  122 => 78,  120 => 77,  117 => 76,  111 => 73,  108 => 72,  106 => 71,  103 => 70,  99 => 68,  95 => 66,  89 => 62,  84 => 60,  79 => 58,  74 => 56,  70 => 55,  62 => 50,  55 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/all_gone/templates/layout/page.html.twig", "D:\\xampp\\htdocs\\projects\\all-gone\\themes\\custom\\all_gone\\templates\\layout\\page.html.twig");
    }
}
