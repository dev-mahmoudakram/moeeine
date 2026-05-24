# Bootstrap SCSS Luxury UI Skill

## Purpose

Use this skill to create a premium luxury interface using Bootstrap 5 and custom SCSS.

## Core Rule

Use Bootstrap for layout and utilities, but customize the visual identity heavily with SCSS.

Do not use Tailwind CSS.

## Visual Direction

The design should feel like:

- Luxury Saudi hospitality
- Smart mobility
- Spiritual care
- Premium official platform

## Color Variables

Use SCSS variables similar to:

```scss
$color-emerald: #003C35;
$color-deep-teal: #062F2B;
$color-dark: #021F1C;
$color-gold: #D9B879;
$color-gold-light: #E7C98A;
$color-ivory: #F8F2E6;
$color-muted-mint: #5CC7B2;
$color-card: rgba(255, 255, 255, 0.06);
$color-border: rgba(217, 184, 121, 0.22);
```

## Suggested SCSS Structure

```txt
resources/scss/app.scss
resources/scss/abstracts/_variables.scss
resources/scss/abstracts/_mixins.scss
resources/scss/base/_typography.scss
resources/scss/components/_navbar.scss
resources/scss/components/_buttons.scss
resources/scss/components/_cards.scss
resources/scss/components/_forms.scss
resources/scss/components/_animations.scss
resources/scss/pages/_home.scss
```

Follow existing project structure if it already exists.

## Layout Rules

- Use Bootstrap container/container-fluid correctly.
- Use responsive grid.
- Use generous spacing.
- Use large section padding.
- Use mobile-first layout.
- Make CTA buttons touch-friendly.
- Keep the content breathable.
- Avoid clutter.

## Components

Build reusable Blade components for:

```txt
resources/views/components/site/navbar.blade.php
resources/views/components/site/footer.blade.php
resources/views/components/site/language-switcher.blade.php
resources/views/components/site/section-heading.blade.php
resources/views/components/site/service-card.blade.php
resources/views/components/site/feature-card.blade.php
resources/views/components/site/stat-card.blade.php
resources/views/components/site/cta.blade.php
```

## Premium UI Patterns

Use:

- Glass cards
- Soft borders
- Gold outline buttons
- Emerald filled buttons
- Rounded large cards
- Subtle gradient backgrounds
- Decorative arches
- Geometric background patterns
- Elegant hover states
- Soft shadows and glow effects

## Button Style

Primary button:

- Gold background
- Dark emerald text
- Large padding
- Rounded pill or rounded-xl
- Soft hover glow

Secondary button:

- Transparent background
- Gold border
- Ivory text
- Gold hover background

## Card Style

Cards should use:

- Dark translucent background
- Soft gold border
- Rounded corners
- Padding
- Hover lift
- Subtle glow

## Forms

Forms should be:

- Large and readable
- Clearly labeled
- Accessible
- RTL-aware
- Mobile-friendly
- Premium with dark fields and gold focus state

## Accessibility

Ensure:

- Good contrast
- Clear focus states
- Keyboard navigation
- Large clickable areas
- Labels for all fields
- Alt text for all images

## Performance

Avoid excessive CSS complexity.
Keep animations and effects lightweight.
Use optimized images and lazy loading.
