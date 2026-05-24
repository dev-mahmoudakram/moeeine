# Animations & Interactions Skill

## Purpose

Use this skill to add subtle premium animations to the Laravel Blade + Bootstrap + SCSS website.

## Important

This is not a React project.
Do not use Framer Motion.
Do not add heavy animation libraries unless the project already uses them.

Use:

- CSS transitions
- CSS keyframes
- Vanilla JavaScript
- IntersectionObserver

## Animation Style

Animations must feel:

- Calm
- Premium
- Spiritual
- Respectful
- Smooth
- Subtle

Avoid:

- Aggressive motion
- Fast bounces
- Cartoon-like movement
- Excessive parallax
- Scroll-jacking
- Heavy JS

## Required Animation Types

Add these where appropriate:

### 1. Section Reveal

Elements should fade up gently when entering the viewport.

Example classes:

```html
<section class="reveal-on-scroll">
```

CSS direction:

```scss
.reveal-on-scroll {
  opacity: 0;
  transform: translateY(24px);
  transition: opacity 700ms ease, transform 700ms ease;
}

.reveal-on-scroll.is-visible {
  opacity: 1;
  transform: translateY(0);
}
```

### 2. Hero Glow

Use a subtle animated radial glow behind the hero visual.

Keep it slow and elegant.

### 3. Floating Decorative Elements

Decorative arches or geometric motifs can float slowly.

Use only 1–3 elements per section.

### 4. Card Hover Lift

Service cards should gently lift and show a gold border/glow on hover.

### 5. Button Hover

Buttons can have a soft gold glow or shimmer.

Keep the effect subtle.

### 6. Phone Mockup Float

App preview phone frames can slowly float vertically.

### 7. Count-Up Stats

If stats are numeric, use a lightweight Vanilla JS count-up when visible.

## Vanilla JS IntersectionObserver

Create a small file such as:

```txt
resources/js/animations.js
```

Suggested behavior:

- Select all `[data-reveal]` elements.
- Add `is-visible` when they enter viewport.
- Unobserve after reveal.
- Respect reduced motion.

## Reduced Motion

Always include:

```scss
@media (prefers-reduced-motion: reduce) {
  *, *::before, *::after {
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    scroll-behavior: auto !important;
    transition-duration: 0.01ms !important;
  }

  .reveal-on-scroll {
    opacity: 1 !important;
    transform: none !important;
  }
}
```

## Performance Rules

- Animate opacity and transform only when possible.
- Avoid animating layout properties like width, height, top, left.
- Avoid large fixed background parallax.
- Avoid too many animated elements.
- Lazy-load images.
- Keep JS minimal.

## Implementation Checklist

- Add SCSS animation partial.
- Import it into app.scss.
- Add animations.js.
- Import animations.js into resources/js/app.js.
- Add `data-reveal` attributes to sections/cards.
- Test desktop and mobile.
- Test reduced motion.
- Ensure animations don't break RTL/LTR.
