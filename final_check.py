import os, re

folder = r"D:\Data Development\kamarispa"
deploy = os.path.join(folder, "deploy")

# Final verification
print("=" * 60)
print("FINAL VERIFICATION")
print("=" * 60)

for html_name in ["index.html", "tentang-kami.html", "service.html", "blog.html", "blog-detail.html", "contact.html"]:
    path = os.path.join(deploy, html_name)
    with open(path, encoding="utf-8") as f:
        content = f.read()
    
    has_header = "Header Atas" in content
    has_footer = "Real Massage Bali" in content
    has_css = "app-BBh7Q5w3.css" in content
    has_js = "app-DEdkgso6.js" in content
    remaining = re.findall(r"\{{[^}}]+}}", content)
    
    print("\n" + html_name)
    print("  Size: " + str(len(content)) + " chars")
    print("  Header: " + ("OK" if has_header else "MISSING"))
    print("  Footer: " + ("OK" if has_footer else "MISSING"))
    print("  CSS: " + ("OK" if has_css else "MISSING"))
    print("  JS: " + ("OK" if has_js else "MISSING"))
    print("  Blade patterns: " + ("NONE" if not remaining else str(remaining)))

# Count total file size
total_size = 0
for root, dirs, files in os.walk(deploy):
    for f in files:
        total_size += os.path.getsize(os.path.join(root, f))

print("\n\nTotal deploy size: " + str(total_size) + " bytes (" + str(total_size / 1024 / 1024) + " MB)")
