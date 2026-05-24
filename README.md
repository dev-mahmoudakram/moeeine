# Haramain Premium Website — Claude Skills & Prompt Pack

This zip contains the complete Claude-ready prompt and skill files for building a **premium luxury website** for the Haramain mobility service.

## Project Direction

The website is **not** a mobile app redesign. It is a premium public website / marketing platform for a Saudi smart mobility service serving visitors of the Two Holy Mosques.

## Main Requirements

- Laravel 13
- Blade
- Bootstrap 5
- Custom SCSS
- Vite
- Laravel localization
- Arabic as the default language
- English as a localized secondary language
- RTL-first layout
- Luxury Saudi / Haram-inspired visual style
- Subtle animations using CSS + Vanilla JavaScript
- Laravel Boost with Claude VS Code Extension

## Recommended Usage

1. Copy `MASTER_PROMPT.md` into your Laravel project root or open it in VS Code.
2. Copy the `.claude/skills` folder into your project root.
3. Open the Laravel project in VS Code.
4. Ensure Laravel Boost is installed and available.
5. Open Claude VS Code Extension.
6. Send the content of `RUN_THIS_IN_CLAUDE.md` to Claude.
7. Let Claude inspect the project using Laravel Boost before implementation.

## File Structure

```txt
MASTER_PROMPT.md
RUN_THIS_IN_CLAUDE.md
PROJECT_CONTEXT.md
CLAUDE.md
.claude/skills/haramain-premium-website/SKILL.md
.claude/skills/laravel-localization-rtl/SKILL.md
.claude/skills/bootstrap-scss-luxury-ui/SKILL.md
.claude/skills/animations-interactions/SKILL.md
.claude/skills/arabic-english-content/SKILL.md
.claude/skills/laravel-boost-workflow/SKILL.md
```

## Important Notes

- Do not use Next.js.
- Do not use React.
- Do not use Tailwind CSS.
- Do not redesign the mobile app.
- The mobile app screenshots should only be used as preview/mockups inside the website.
- The website should be Arabic-first with `/ar` as the default experience and `/en` as the English version.
- If no locale is provided, redirect to Arabic.
