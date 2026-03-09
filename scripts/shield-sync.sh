#!/bin/bash
# ─────────────────────────────────────────────────────
# Shield Sync Script
# Auto-detects Filament Resources and generates Shield
# permissions/policies for any new ones.
# ─────────────────────────────────────────────────────

set -e

echo "🛡️  Shield Sync — Scanning for Filament Resources..."

RESOURCE_DIR="app/Filament/Resources"

if [ ! -d "$RESOURCE_DIR" ]; then
    echo "❌ Resource directory not found: $RESOURCE_DIR"
    exit 1
fi

RESOURCE_COUNT=$(find "$RESOURCE_DIR" -maxdepth 1 -name "*Resource.php" | wc -l | tr -d ' ')
echo "📦 Found $RESOURCE_COUNT Filament Resources."

echo "🔄 Running shield:generate --all..."
php artisan shield:generate --all --panel=admin 2>&1

echo ""
echo "🔄 Clearing caches..."
php artisan config:clear
php artisan route:clear
php artisan view:clear

echo ""
echo "✅ Shield sync complete! All resources now have permissions & policies."
