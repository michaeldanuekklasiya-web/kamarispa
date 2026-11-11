import os, re

folder = r"D:\Data Development\kamarispa"
deploy = os.path.join(folder, "deploy")

# Process all HTML files and fix remaining Blade directives
for html_name in ["index.html", "tentang-kami.html", "service.html", "blog.html", "blog-detail.html", "contact.html"]:
    path = os.path.join(deploy, html_name)
    with open(path, encoding="utf-8") as f:
        content = f.read()
    
    # Replace Laravel URL helper
    content = re.sub(r"\{\{ url\('([^']+)'\) \}\}", r"\1", content)
    content = re.sub(r"\{\{ url\(\s*\"([^\"]+)\"\s*\)\ \}\}", r"\1", content)
    
    # Replace Laravel asset helper
    content = re.sub(r"\{\{ asset\('img/([^']+)'\) \}\}", r"img/\1", content)
    content = re.sub(r"\{\{ asset\(\s*\"img/([^\"]+)\"\s*\)\ \}\}", r"img/\1", content)
    
    # Replace other Blade echo statements
    def replace_echo(m):
        expr = m.group(1).strip()
        if "date(" in expr:
            return "2026"
        elif "url(" in expr or "asset(" in expr:
            return "/"
        return m.group(0)
    
    content = re.sub(r"\{\{ ([^}]+) \}\}", replace_echo, content)
    
    with open(path, "w", encoding="utf-8") as f:
        f.write(content)
    
    print("Fixed " + html_name)

# Verify
with open(os.path.join(deploy, "index.html"), encoding="utf-8") as f:
    content = f.read()

# Read back pattern
pattern = r"\{\{[^}]+}}\|"
remaining = re.findall(pattern, content)
print("\nRemaining Blade patterns: " + str(remaining))
hrefs = re.findall(r'href="(.*?)"', content)
print("Href examples: " + str(hrefs[:5]))
