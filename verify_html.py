import os, re

folder = r"D:\Data Development\kamarispa"
deploy = os.path.join(folder, "deploy")

# Verify all HTML files
for html_name in ["index.html", "tentang-kami.html", "service.html", "blog.html", "blog-detail.html", "contact.html"]:
    path = os.path.join(deploy, html_name)
    with open(path, encoding="utf-8") as f:
        content = f.read()
    
    # Check for remaining Blade directives
    remaining = re.findall(r"\{{[^}}]+}}", content)
    
    # Check for important elements
    has_header = "Header Atas" in content
    has_footer = "Real Massage Bali" in content
    has_css = "app-BBh7Q5w3.css" in content
    has_js = "app-DEdkgso6.js" in content
    
    # Check for key paths
    hrefs = re.findall(r'href="([^"]*)"', content)
    internal = [h for h in hrefs if not h.startswith("http") and not h.startswith("#")]
    
    print("=" * 50)
    print("File: " + html_name)
    print("  Size: " + str(len(content)) + " chars")
    print("  Header: " + str(has_header))
    print("  Footer: " + str(has_footer))
    print("  CSS: " + str(has_css))
    print("  JS: " + str(has_js))
    print("  Remaining Blade: " + str(remaining))
    print("  Internal links: " + str(internal[:6]))

# Check for any remaining PHP-like patterns in index.html
with open(os.path.join(deploy, "index.html"), encoding="utf-8") as f:
    content = f.read()

php_like = re.findall(r"\{{[^}}]+}}", content)
print("\nRemaining Blade patterns in index.html: " + str(php_like))
