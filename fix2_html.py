import os, re

folder = r"D:\Data Development\kamarispa"
deploy = os.path.join(folder, "deploy")

# Process all HTML files and fix remaining Blade patterns
for html_name in ["index.html", "tentang-kami.html", "service.html", "blog.html", "blog-detail.html", "contact.html"]:
    path = os.path.join(deploy, html_name)
    with open(path, encoding="utf-8") as f:
        content = f.read()
    
    # Fix remaining asset patterns: {{ logo3.png }} -> img/logo3.png
    content = re.sub(r"\{\{ (img/[^}]+) \}\}",
                     lambda m: m.group(1), content)
    
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
