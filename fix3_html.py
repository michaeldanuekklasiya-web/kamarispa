import os, re

folder = r"D:\Data Development\kamarispa"
deploy = os.path.join(folder, "deploy")

# Process all HTML files and fix remaining Blade patterns
for html_name in ["index.html", "tentang-kami.html", "service.html", "blog.html", "blog-detail.html", "contact.html"]:
    path = os.path.join(deploy, html_name)
    with open(path, encoding="utf-8") as f:
        content = f.read()
    
    # Fix remaining asset patterns: {{ img/logo3.png }} -> img/logo3.png
    # Pattern: {{ img/A-B.png }} or {{ logo3.png }} or {{ icon3.png }}
    patterns = [
        (r"\{\{ (img/[^}]+) \}\}", r"\1"),
        (r"\{\{ (logo\d+\.png) \}\}", r"img/\1"),
        (r"\{\{ (icon\d+\.png) \}\}", r"img/\1"),
        (r"\{\{ (service/[^}]+) \}\}", r"img/\1"),
    ]
    for pat, repl in patterns:
        content = re.sub(pat, repl, content)
    
    # Fix comments (Blade comments)
    content = re.sub(r"\{\{--", "", content)
    
    with open(path, "w", encoding="utf-8") as f:
        f.write(content)
    
    print("Fixed " + html_name)

# Verify
with open(os.path.join(deploy, "index.html"), encoding="utf-8") as f:
    content = f.read()

remaining = re.findall(r"\{{[^}}]+}}", content)
print("\nRemaining Blade patterns: " + str(remaining))
