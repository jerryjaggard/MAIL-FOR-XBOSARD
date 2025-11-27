# XBoard Email Templates

10 Beautiful Blade Email Templates for XBoard

**Author:** @gracelyncn | @Teamtendex

## Templates Included

| Template | Style | Preview Colors |
|----------|-------|----------------|
| `modern` | Clean gradient header | Purple gradient |
| `minimal` | Simple & elegant | Black & white |
| `gradient` | Vibrant colors | Red to yellow |
| `corporate` | Business formal | Navy blue |
| `dark` | Dark mode | Dark with purple |
| `ocean` | Fresh blue tones | Ocean blue |
| `sunset` | Warm colors | Orange sunset |
| `forest` | Nature green | Green tones |
| `royal` | Elegant luxury | Purple & gold |
| `rose` | Feminine style | Pink rose |

## Installation

### Step 1: Copy Templates to XBoard

Copy the template folder you want to use to XBoard's mail views:

```bash
# Example: Using the "modern" template
cp -r email-templates/modern/* /www/wwwroot/your-site/resources/views/mail/
```

### Step 2: Clear View Cache

```bash
cd /www/wwwroot/your-site
php artisan view:clear
```

### Step 3: Test

Register a new user or trigger any email notification to see the new template.

## Template Variables

All templates support these variables:

| Variable | Description |
|----------|-------------|
| `$name` | Recipient name or title |
| `$content` | Main email content |
| `$url` | Button link URL |
| `$logo` | Logo URL (optional) |
| `$subject` | Email subject |

## Customization

Edit the Blade files to customize:

- Colors (CSS inline styles)
- Logo placement
- Button text
- Footer text
- Fonts

## Files Per Template

Each template folder contains:

```
template-name/
└── notify.blade.php    # Main email template
```

## License

Free to use and modify. Credit to @gracelyncn | @Teamtendex appreciated.
