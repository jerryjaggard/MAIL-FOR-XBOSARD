# XBoard Email Templates Collection

## 15 Professional Email Templates for XBoard

A comprehensive collection of beautiful, responsive Blade email templates designed for XBoard VPN management panel. Each template includes all 5 required email types matching XBoard's job scheduler.

**Author:** @gracelyncn | @Teamtendex  
**Templates:** 15 (10 Original + 5 Advanced Experimental)

---

## 📧 Templates Overview

### Original Templates (10)

| Template | Style | Theme Colors | Description |
|----------|-------|--------------|-------------|
| `modern` | Clean gradient | Purple gradient (#667eea → #764ba2) | Modern clean design with smooth gradients |
| `minimal` | Simple & elegant | Black & white | Minimalist approach, perfect for professional use |
| `gradient` | Vibrant colors | Red to yellow (#ff6b6b → #feca57) | Eye-catching colorful design |
| `corporate` | Business formal | Navy blue (#1a365d) | Professional corporate styling |
| `dark` | Dark mode | Dark with purple (#1a1a2e) | Perfect for dark mode preferences |
| `ocean` | Fresh blue tones | Ocean blue (#0ea5e9 → #0284c7) | Refreshing ocean-themed design |
| `sunset` | Warm colors | Orange sunset (#f97316 → #ea580c) | Warm, inviting sunset tones |
| `forest` | Nature green | Green tones (#10b981 → #059669) | Eco-friendly nature theme |
| `royal` | Elegant luxury | Purple & gold (#7e22ce + #d4af37) | Premium royal appearance |
| `rose` | Feminine style | Pink rose (#fb7185 → #f43f5e) | Elegant feminine design |

### Advanced Experimental Templates (5)

| Template | Style | Theme Colors | Description |
|----------|-------|--------------|-------------|
| `aurora` | Aurora borealis | Multi-color gradients | Stunning northern lights effect with cosmic gradients |
| `neon` | Cyberpunk neon | Neon green/cyan/magenta | Bold cyberpunk aesthetic with glowing effects |
| `glassmorphism` | Glass morphism | Frosted translucent | Modern UI trend with frosted glass effects |
| `premium` | Luxury gold | Black & gold (#c9a227) | Ultra-premium luxury with gold accents |
| `futuristic` | Futuristic tech | Teal accent (#64ffda) | Sci-fi inspired with tech aesthetics |

---

## 📁 Files Per Template

Each template folder contains **5 complete files**:

```
template-name/
├── verify.blade.php        # Email verification code
├── mailLogin.blade.php     # Magic link login
├── notify.blade.php        # General notification
├── remindExpire.blade.php  # Subscription expiry reminder
└── remindTraffic.blade.php # Traffic usage warning (80%)
```

These match XBoard's email job scheduler requirements:
- `SendEmailVerify` → verify.blade.php
- `SendEmailMagicLink` → mailLogin.blade.php  
- `SendNotification` → notify.blade.php
- `SendRemindExpire` → remindExpire.blade.php
- `SendRemindTraffic` → remindTraffic.blade.php

---

## 🚀 Installation

### Step 1: Copy Template to XBoard

Choose your preferred template and copy all files to XBoard's mail views:

```bash
# Example: Using the "aurora" template
cp -r email-templates/aurora/* /www/wwwroot/your-site/resources/views/mail/

# Or for any other template
cp -r email-templates/futuristic/* /www/wwwroot/your-site/resources/views/mail/
```

### Step 2: Clear View Cache

```bash
cd /www/wwwroot/your-site
php artisan view:clear
php artisan cache:clear
```

### Step 3: Test

Trigger any email notification to see the new template in action:
- Register a new user (verification email)
- Use forgot password (login email)
- Wait for scheduled jobs (reminder emails)

---

## 🎨 Template Variables

All templates support these XBoard variables:

### Common Variables
| Variable | Description | Used In |
|----------|-------------|---------|
| `$name` | Site name / Title | All templates |
| `$url` | Dashboard URL | All templates |
| `$content` | Main content (notify only) | notify.blade.php |
| `$subject` | Email subject | notify.blade.php |

### Specific Variables
| Variable | Description | Used In |
|----------|-------------|---------|
| `$code` | Verification code | verify.blade.php |
| `$link` | Magic login link | mailLogin.blade.php |

---

## 🛠️ Customization

### Colors
Edit the inline CSS styles in any template file:
- Header backgrounds: `background: linear-gradient(...)`
- Button colors: `background: ...`
- Text colors: `color: ...`

### Logo
Add your logo by passing `$logo` variable from XBoard:
```php
@if(isset($logo) && $logo)
    <img src="{{ $logo }}" alt="Logo" style="max-height: 50px;">
@endif
```

### Footer Text
Customize the footer by editing the last `<td>` section in each template.

### Fonts
Modify the `font-family` property in the `<body>` style.

---

## 📱 Responsive Design

All templates are fully responsive and tested for:
- Desktop email clients (Outlook, Thunderbird)
- Web email clients (Gmail, Yahoo, Outlook.com)
- Mobile email apps (iOS Mail, Gmail App, Outlook Mobile)

---

## 🎯 Template Recommendations

| Use Case | Recommended Template |
|----------|---------------------|
| Professional/Corporate | `corporate`, `minimal` |
| Modern SaaS | `modern`, `glassmorphism` |
| Gaming/Tech | `neon`, `futuristic` |
| Premium Services | `royal`, `premium` |
| Eco/Green Services | `forest`, `ocean` |
| Creative/Bold | `gradient`, `aurora`, `sunset` |
| Feminine Products | `rose` |
| Dark Mode Preference | `dark`, `neon`, `aurora` |

---

## 📊 File Size Comparison

| Template | Avg. File Size | Total Size (5 files) |
|----------|----------------|---------------------|
| minimal | ~2.8 KB | ~14 KB |
| modern | ~3.2 KB | ~16 KB |
| corporate | ~4.2 KB | ~21 KB |
| aurora | ~4.1 KB | ~20.5 KB |
| neon | ~4.1 KB | ~20.5 KB |
| premium | ~4.1 KB | ~20.5 KB |
| futuristic | ~4.5 KB | ~22.5 KB |

---

## 📄 License

Free to use and modify for personal and commercial projects.

Credit to @gracelyncn | @Teamtendex appreciated but not required.

---

## 🔄 Updates

**v2.0** - Added 5 advanced experimental templates + Complete file sets (5 files each)
- Aurora (Aurora Borealis theme)
- Neon (Cyberpunk style)
- Glassmorphism (Modern glass UI)
- Premium (Luxury gold)
- Futuristic (Sci-fi tech)

**v1.0** - Initial 10 templates with notify.blade.php only

---

## 🤝 Support

For issues or customization requests, please contact the author or open an issue in the repository.

Happy emailing! 📬✨
